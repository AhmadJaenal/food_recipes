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
                return view('errorpage.error_402');
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
            ]);

            if ($response->status() == 200) {
                $restaurantsResponse = $response->json()['restaurants'];
                $restaurants = array_slice($restaurantsResponse, 0, 10);
                return view('landingpage.search_restaurants', compact('restaurants'));
                // dd($restaurants);
            } else {
                return view('errorpage.error_402');
            }
        }

        // return view('landingpage.search_restaurants');
    }
}
