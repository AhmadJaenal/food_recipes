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
        return view('landingpage.index');
    }

    public function detailRecipe($id)
    {
        $apiKey = env('API_KEY');
        $response = Http::get("https://api.spoonacular.com/recipes/{$id}/information",  [
            'apiKey' => $apiKey,
        ]);
        $response1 = Http::get("https://api.spoonacular.com/recipes/{$id}/ingredientWidget.json",  [
            'apiKey' => $apiKey,
        ]);
        $response2 = Http::get("https://api.spoonacular.com/recipes/{$id}/tasteWidget",  [
            'apiKey' => $apiKey,
        ]);
        
        if ($response->status() == 200 and $response1->status() == 200) {
            $detailRecipe = $response->json();
            $ingredients = $response1->json();
            $tasteWidget = $response2;
            // dd($ingredients);
            // dd($detailRecipe);
            return view('landingpage.detail_food', compact('detailRecipe','ingredients','tasteWidget'));
        } else {
            dd($response->status());
        }
        // return view('landingpage.detail_food_cache');
    }

    public function fetchIngredient($id)
    {
        $apiKey = env('API_KEY');
        $response = Http::get("https://api.spoonacular.com/food/ingredients/{$id}/information",  [
            'apiKey' => $apiKey,
        ]);
        if ($response->status() == 200) {
            $detailRecipe = $response->json();
            dd($detailRecipe);
        } else {
            dd($response->status());
        }
    }

    public function foodCategory($type)
    {
        $apiKey = env('API_KEY');
        $response = Http::get("https://api.spoonacular.com/recipes/complexSearch",  [
            'apiKey' => $apiKey,
            'type' => $type,
        ]);
        if ($response->status() == 200) {
            $recipes = $response->json()['results'];
            return view('landingpage.category_food', compact('recipes', 'type'));
        } else {
            dd($response->status());
        }
    }
}
