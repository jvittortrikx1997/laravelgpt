<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View{
        return view('home');
    }

    public function receita(Request $request): View{
        return view('receita');
    }

    public function copy(): View{
        return view('copy');
    }

    public function copySearch(Request $request): View{
        dd($request);
    }

    public function ingredientes(Request $request): View{
        $array = ['error' => ''];
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
                'prompt' => 'Gere a melhor receita utilizando somente os seguintes ingredientes: '.$request->ingredientes,
                'temperature' => 0.5,
                'max_tokens' => 500
            ]
        ]);

        if($response->getStatusCode() == 200){
            $data = json_decode($response->getBody(), true);
            $dataView['receita'] = $data['choices'][0]['text'];
            return view('receita', $dataView);
        }else{
            $array['error'] = 'Um erro ocorreu durante a requisção';
            return $array;
        }

    }
}
