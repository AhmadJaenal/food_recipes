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
        if ($response->status() == 200) {
            $detailRecipe = $response->json()['analyzedInstructions'][0]['steps'];
            return view('landingpage.detail_recipe', compact('detailRecipe'));
            // dd($detailRecipe);

            // $detailRecipe = $response->json();
            // dd($detailRecipe);
            // return view('landingpage.detail_food', compact('detailRecipe'));
        } else {
            dd($response->status());
        }
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
