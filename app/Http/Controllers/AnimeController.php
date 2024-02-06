<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class AnimeController extends Controller
{
    
    function index() {

        $response = Http::get("https://api.jikan.moe/v4/genres/anime");

        $response->json();

        $data = $response["data"];

        

        return view("main",["data" => $data]);


    }

    function animeByGenre($id) {

        $response = Http::get("https://api.jikan.moe/v4/anime?genres=$id");

        $response->json();

        $data = $response["data"];

        

        return view("genre", ["data" => $data]);


    }


    

}
