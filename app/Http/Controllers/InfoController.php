<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Pravodev\KawalCoronaLaravel\Facades\KawalCorona;
// use Pravodev\KawalCoronaLaravel\KawalCorona;

class InfoController extends Controller
{
    public function index()
    {
        // $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        // $data = $response->json();
        // $data = KawalCorona::getProvinces();
        // $data = $data_provinsi->json();
        $data  = KawalCorona::getProvinces();
        // \dd($data);
        return view('index', compact('data'));
    }
}
