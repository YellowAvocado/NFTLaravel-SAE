<?php

namespace App\Http\Controllers;

use App\Models\NFT;
use App\Models\Project;
use App\Models\Type;
use App\Services\MintNFTService;
use App\Services\OpenAIService;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class ImageGeneratorController extends Controller
{
    public function showForm()
    {
        return view("showForm");
    }

    public function index()
    {
        return view('index', [
            'nfts' => NFT::all()
        ]);
    }

    public function submitForm(Request $request)
    {
        $openAi = new OpenAIService();
        $result = $openAi->generateImage($request->prompt);
        if (!$result || empty($result['data'])) {
            \Log::error('Image generation failed.');
            return;
        }
        $imageInfo = $this->saveImageToDisk($result['data'][0]['url']);

        $nftMetadata = [
            "name" => "myNFT",
            "description" => "description",
            "image" => env("APP_URL")."/assets/".$imageInfo["basename"]
        ];

        $NFTname = $imageInfo["name"].".json";
        Storage::disk('assets')->put($NFTname, json_encode($nftMetadata));
        $mintService = new MintNFTService();
        $mintService->mint($request->address, env("APP_URL")."/assets/".$imageInfo["name"].".json");
    }
    protected function saveImageToDisk($imageData,)
    {
        $contents = file_get_contents($imageData);
        $name = 'img-' . Str::random(20);
        $imageName = 'img-' . Str::random(20) . '.png';
        Storage::disk('public/assets')->put($imageName, $contents);

        /* //database storage
         $nft = new NFT();
         $nft->title = 'NFT Title';
         $nft->images = $imageName;
         $nft->image_data = $contents;
         $nft->save();*/

        return [
            'path' => $imageName,
            'basename' => $imageName,
            'name' => $name,
            'size' => strlen($imageData),
        ];
    }



}

