<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    
    function manga() {

        $response = Http::get("https://api.jikan.moe/v4/manga");

        $response->json();

        $data = $response["data"];

        return view("manga",["data" => $data]);


    }
 
}
