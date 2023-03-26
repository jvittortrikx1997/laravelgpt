<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(Request $request): View{
        return view('welcome');
    }

    public function ingredientes(Request $request): View{
        $client = new Client([
            'base_uri' => 'https://api.openai.com/v1/completions',
            'headers' => [
                'Content-type' => 'application/json',
                'Authorization' => 'Bearer '.env('GPT_KEY')
            ]
        ]);

        $response = $client->post('completions', [
            'json' => [
                'model' => 'text-davinci-003',
                'prompt' => 'Gere a melhor receita com os seguintes ingredientes: '.$request->ingredientes,
                'temperature' => 0.5,
                'max_tokens' => 500
            ]
        ]);

        if($response->getStatusCode() == 200){
            $data = json_decode($response->getBody(), true);
        }

        dd($data);
    }
}
