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
    //         'query' => 'pasta',
    //     ]);
    //     if ($response->status() == 200) {
    //         $result = $response->json();
    //         dd($result);
    //     } else {
    //         dd($response->status());
    //     }
    // }

    // Get Summary
    public function Testing()
    {
        $apiKey = env('API_KEY');
        $response = Http::get("https://api.spoonacular.com/recipes/660736/summary",  [
            'apiKey' => $apiKey,
        ]);
        if ($response->status() == 200) {
            $result = $response->json();
            dd($result);
        } else {
            dd($response->status());
        }
    }

    // Get Analyzed Recipe Instructions
    // public function Testing()
    // {
    //     $apiKey = env('API_KEY');
    //     $response = Http::get("https://api.spoonacular.com/recipes/324694/analyzedInstructions",  [
    //         'apiKey' => $apiKey,
    //     ]);
    //     if ($response->status() == 200) {
    //         $result = $response->json();
    //         dd($result);
    //     } else {
    //         dd($response->status());
    //     }
    // }

    // Describe Image Input
    // public function Testing()
    // {
    //     $imageBinary = [
    //         [1, 1, 1, 1, 1, 1, 1, 1],
    //         [1, 0, 0, 0, 0, 0, 0, 1],
    //         [1, 0, 1, 1, 1, 1, 0, 1],
    //         [1, 0, 1, 1, 1, 1, 0, 1],
    //         [1, 0, 0, 0, 0, 0, 0, 1],
    //         [1, 1, 1, 1, 1, 1, 1, 1],
    //     ];
    //     $apiKey = env('API_KEY');
    //     $response = Http::get("https://api.spoonacular.com/food/images/analyze",  [
    //         'apiKey' => $apiKey,
    //         'file' => $imageBinary,
    //     ]);
    //     if ($response->status() == 200) {
    //         $result = $response->json();
    //         dd($result);
    //     } else {
    //         dd($response->status());
    //     }
    // }



    
}
