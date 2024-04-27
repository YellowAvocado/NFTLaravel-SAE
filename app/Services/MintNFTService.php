<?php
namespace App\Services;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
class MintNFTService

{
    public $client;
    public function __construct()
    {

        $this->client = new Client([
            'base_uri' => env("MINT_URL"),
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function mint($address, $tokenURI)
    {
        try {
            $response = $this->client->post('mint', [
                'json' => [
                    'address' => $address,
                    'tokenURI' => $tokenURI
                ]
            ]);
            return $response->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            Log::error("Error minting NFT: " . $e->getMessage());
            return null;
        }
    }
}
