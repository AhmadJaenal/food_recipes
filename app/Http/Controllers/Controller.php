<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    // Videos Search
    // public function Testing()
    // {
    //     $apiKey = env('API_KEY');
    //     $response = Http::get("https://api.spoonacular.com/food/videos/search",  [
    //         'apiKey' => $apiKey,
    //         'query' => 'Pasta',
    //     ]);
    //     if ($response->status() == 200) {
    //         $result = $response->json();
    //         dd($result);
    //     } else {
    //         dd($response->status());
    //     }
    // }

    // Get Summary
    // public function Testing()
    // {
    //     $apiKey = env('API_KEY');
    //     $response = Http::get("https://api.spoonacular.com/recipes/660736/summary",  [
    //         'apiKey' => $apiKey,
    //     ]);
    //     if ($response->status() == 200) {
    //         $result = $response->json();
    //         dd($result);
    //     } else {
    //         dd($response->status());
    //     }
    // }

    // Get Analyzed Recipe Instructions
    // public function Testing()
    // {
    //     $apiKey = env('API_KEY');
    //     $response = Http::get("https://api.spoonacular.com/recipes/1077393/analyzedInstructions",  [
    //         'apiKey' => $apiKey,
    //     ]);
    //     if ($response->status() == 200) {
    //         $result = $response->json();
    //         dd($result);
    //     } else {
    //         dd($response->status());
    //     }
    // }

    // Detect Food in Text
    public function Testing()
    {
        $apiKey = env('API_KEY');
        $response = Http::post("hhttps://api.spoonacular.com/food/detect",  [
            'apiKey' => $apiKey,
            'text' => 'I like to eat delicious tacos. The only thing better is a cheeseburger with cheddar. But then again, pizza with pepperoni, mushrooms, and tomatoes is so good too!',
        ]);
        if ($response->status() == 200) {
            $result = $response->json();
            dd($result);
        } else {
            dd($response->status());
        }
    }










    // Describe Image Input
    // public function Testing()
    // {
    //     $apiKey = env('API_KEY');
    //     $response = Http::get("https://api.spoonacular.com/food/images/analyze",  [
    //         'apiKey' => $apiKey,
    //         'imageUrl' => 'https://1.bp.blogspot.com/-eBso6N_aark/V-gVAxojDuI/AAAAAAAACGA/8Bz0M3ym9qA1R5Ye6nHhFeh53q0_d9yFQCLcB/s1600/sandwich.jpg',
    //     ]);
    //     if ($response->status() == 200) {
    //         $result = $response->json();
    //         dd($result);
    //     } else {
    //         dd($response->status());
    //     }
    // }



    
}
