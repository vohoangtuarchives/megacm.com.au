<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        $client = new Client();
        $response = $client->post('https://api.openai.com/v1/engine/davinci-codex/completions', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . config("megacm.chatgpt", "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"),
            ],
            'json' => [
                'prompt' => $request->input('message'),
                'temperature' => 0.7,
                'max_tokens' => 60,
                'top_p' => 1,
                'n' => 1,
                'stop' => ['\n'],
            ],
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return response()->json($result['choices'][0]['text']);
    }
}
