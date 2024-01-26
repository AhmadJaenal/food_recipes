<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Psr\Http\Message\RequestInterface;


class RecipesController extends Controller
{
    public function featchRecipes()
    {

        $apiKey = env('API_KEY');
        $response = Http::get("https://api.spoonacular.com/food/search", [
            'apiKey' => $apiKey,
        ]);
        if ($response->status() == 200) {
            $recipes = $response->json()['searchResults'][0]['results'];
            return view('landingpage.index', compact('recipes'));
        } else {
            dd($response->status());
        }
    }

    public function detailRecipe($id)
    {
        $apiKey = env('API_KEY');
        $response = Http::get("https://api.spoonacular.com/recipes/{$id}/information",  [
            'apiKey' => $apiKey,
        ]);
        if ($response->status() == 200) {
            $detailRecipe = $response->json();
            dd($detailRecipe);
        } else {
            dd($response->status());
        }
    }
}
