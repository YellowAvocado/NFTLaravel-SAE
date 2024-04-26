<?php
namespace App\Services;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
class MintNFTService

{
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
        $response = $this->client->post('mint', [
           'address' => $address,
            'tokenURI' => $tokenURI
        ]);

    }
}
