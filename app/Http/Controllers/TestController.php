<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class TestController extends Controller
{
    public function login(Request $request){
        $email = "ilham@gmail.com";
        $password = "12345678";

        $data = [
            'email' => $email,
            'password' => $password,
        ];
        
        $response = Http::post(Config::get('services.api.baseUrl').'login', $data);
        
        if ($response->successful()) {
            $responseData = collect($response->json()); 
            return $responseData['token'];
        } else {
            return $response;
        }
    }

    public function read_barang(Request $request){

        $token = "20|gAKnF6oIa8BRjX6SuMvuPyG6h8VuwifnhGhxeBrJ19d50211";
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get(Config::get('services.api.baseUrl').'barang');

        if ($response->successful()) {
            $responseData = collect($response->json()); 
            return $responseData;
        } else {
            return $response;
        }
    }
}
