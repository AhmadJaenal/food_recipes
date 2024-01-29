<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Psr\Http\Message\RequestInterface;

class SearchController extends Controller
{
    public function searchGrocery(Request $request)
    {

        $apiKey = env('API_KEY');

        if ($request->has('searchInput')) {
            $response = Http::get("https://api.spoonacular.com/recipes/complexSearch", [
                'apiKey' => $apiKey,
                'query' => $request->searchInput,
                'includeIngredients' => $request->includeIngredients,
                'excludeIngredients' => $request->excludeIngredients,
                'type' =>  $request->type,
            ]);

            if ($response->status() == 200) {
                $resultRecipes = $response->json()['results'];
                return view('landingpage.search_page', compact('resultRecipes'));
            } else {
                dd($response->status());
            }
        }
    }

    public function searchRestaurants(Request $request)
    {
        $apiKey = env('API_KEY');

        if ($request->has('cuisine')) {
            $response = Http::get("https://api.spoonacular.com/food/restaurants/search", [
                'apiKey' => $apiKey,
                'cuisine' => $request->cuisine,
                'limit' => 10,
            ]);

            if ($response->status() == 200) {
                $restaurants = $response->json()['restaurants'];
                return view('landingpage.search_restaurants', compact('restaurants'));
                // dd($restaurants);
            } else {
                dd($response->status());
            }
        }

        // return view('landingpage.search_restaurants');
    }
}
