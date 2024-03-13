<?php
namespace App\Services;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
class OpenAIService
{
    protected $client;
    protected $apiKey;
    public function __construct()
    {
        $this->apiKey = env('OPENAI_API_KEY');
        $this->client = new Client([
            'base_uri' => 'https://api.openai.com/v1/',
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->apiKey,
            ],
        ]);
    }
    public function getResponse($prompt)
    {
        // Add new user prompt to conversation
        $conversation[] = ["role" => 'system', "content" => $prompt['role']];
        $conversation[] = ["role" => 'user', "content" => $prompt['prompt']];
        try {
            $response = $this->client->post('chat/completions', [
                'json' => [
                    'model' => $prompt['model'] ?? 'gpt-3.5-turbo',
                    'messages' => $conversation,
                    'temperature' => 0.7,
                ],
            ]);
            Log::info(print_r( [
                'json' => [
                    'model' => $prompt['model'] ?? 'gpt-3.5-turbo',
                    'messages' => $conversation,
                    'temperature' => 0.7,
                ],
            ], true));
            Log::debug('OpenAI API request succeeded: ' . $response->getBody());
            $data = json_decode($response->getBody(), true);
            $modelResponse = end($data['choices'])['message']['content'];
            return $modelResponse;
        } catch (\Exception $e) {
            Log::error('OpenAI API request failed: ' . $e->getMessage());
            Log::error('OpenAI API request failed: ' . $e->getTraceAsString());
            return 'An error occurred while processing your request.';
        }
    }
    public function generateImage($prompt)
    {
        $url = 'https://api.openai.com/v1/images/generations';
        $headers = [
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type' => 'application/json',
        ];
        $body = [
            'prompt' => $prompt,
            'n' => 1, // Number of images to generate
            'model' => 'dall-e-3',
            'size' => '1792x1024',
        ];
        try {
            $response = $this->client->request('POST', $url, [
                'headers' => $headers,
                'json' => $body,
            ]);
            if ($response->getStatusCode() == 200) {
                $content = $response->getBody()->getContents();
                return json_decode($content, true);
            } else {
                Log::error('Failed to generate image with status code: ' . $response->getStatusCode());
                return null;
            }
        } catch (\Exception $e) {
            Log::error('Exception when generating image: ' . $e->getMessage());
            return null;
        }
    }
}
