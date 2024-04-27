<?php

namespace App\Http\Controllers;

use App\Models\NFT;

use App\Models\Project;
use App\Services\MintNFTService;
use App\Services\OpenAIService;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Log;
use Str;

class ImageGeneratorController extends Controller
{
    public $title;
    public $prompt;
    public $address;

    public function showForm()
    {
        return view('showForm', [
            'nfts' => NFT::all()
        ]);
    }

    public function submitForm(Request $request, NFT $nft)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'prompt' => 'required|string|max:150',
            'address' => 'required',
        ], [
            'title.required' => 'Please enter a title.',
            'title.max' => 'Title must not exceed 50 characters.',
            'prompt.required' => 'Please enter a prompt.',
            'prompt.max' => 'Prompt must not exceed 150 characters.',
            'address.required' => 'Please enter a wallet address.',
        ]);

        $openAi = new OpenAIService();
        $result = $openAi->generateImage($request->prompt);
        if (!$result || empty($result['data'])) {
            \Log::error('Image generation failed.');
            return;
        }

        $title = $request->title;
        Log::info('Received title: ' . $request->title);

        $imageInfo = $this->saveImageToDisk($result['data'][0]['url'], $title);

        $nftMetadata = [
            "name" => "myNFT",
            "description" => "description",
            "image" => env("APP_URL") . "/storage/assets/" . $imageInfo["basename"]
        ];

        $NFTname = $imageInfo["name"] . ".json";
        Storage::disk('public')->put($NFTname, json_encode($nftMetadata));
        $mintService = new MintNFTService();
        $mintService->mint($request->address, env("APP_URL") . "/storage/" . $imageInfo["name"] . ".json");

        Log::info('Received data: ' . json_encode($request->all()));
        Log::info('Image saved to: ' . storage_path('app/public/assets/' . $title));


        return view('showForm', [
            'nfts' => NFT::all()
        ]);
    }

    protected function saveImageToDisk($imageData, $title)
    {

        $contents = file_get_contents($imageData);
        $name = 'img-' . Str::random(20);
        $imageName = $name . '.png';

        Storage::disk('public')->put('assets/' . $imageName, $contents);

        $nft = new NFT();
        $nft->title = $title;
        $nft->image_path = $imageName;
        $nft->user_id = auth()->id();
        $nft->save();

        return [
            'path' => $imageName,
            'basename' => $imageName,
            'name' => $name,
            'size' => strlen($contents),
        ];
    }

    public function destroy($id)
    {
        $nft = NFT::find($id);

        if (!$nft) {
            // NFT not found, return an error or redirect back
            return redirect()->back()->with('error', 'NFT not found.');
        }

        $nft->delete();

        return redirect()->back()->with('success', 'NFT deleted successfully.');
    }

    public function render()
    {
        return view('livewire.your-livewire-component');
    }
}

