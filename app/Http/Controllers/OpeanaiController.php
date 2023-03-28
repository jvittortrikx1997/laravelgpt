<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class OpeanaiController extends Controller
{
    public function search(){
        $array = ['error' => '', 'list' => ''];

        $client = new Client([
            'base_uri' => 'https://api.openai.com/v1/completions',
            'headers' => [
                'Content-type' => 'application/json',
                'Authorization' => 'Bearer '.env('GPT_KEY')
            ]
        ]);
    }
}
