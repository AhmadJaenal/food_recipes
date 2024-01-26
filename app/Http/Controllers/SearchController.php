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
            $response = Http::get("https://api.spoonacular.com/food/products/search", [
                'apiKey' => $apiKey,
                'query' => $request->searchInput,
                'number' => 5,
            ]);

            if ($response->status() == 200) {
                $resultRecipes = $response->json()['products'];
                return view('landingpage.search_page', compact('resultRecipes'));
                // dd($resultRecipes);
            } else {
                dd('Sorry, the server is having problems');
            }
        }
    }
}
