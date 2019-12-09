<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;


class CoinsController extends Controller
{
    public function index()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://www.mercadobitcoin.net/api/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        $coin = 'BTC/';

        $response = $client->request('GET', $coin.'ticker');


        dd(json_decode($response->getBody()->getContents()));
    }
}
