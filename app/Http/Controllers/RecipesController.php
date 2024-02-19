<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();

            return view('landingpage.index', compact('recipes', 'blogs'));
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
        $response3 = Http::get("https://api.spoonacular.com/recipes/{$id}/summary",  [
            'apiKey' => $apiKey,
        ]);

        $index_substitutes = [];
        $i = 0;
        while ($i < count($response1->json()['ingredients'])) {
            $substitutes = Http::get("https://api.spoonacular.com/food/ingredients/substitutes",  [
                'apiKey' => $apiKey,
                'ingredientName' => $response1->json()['ingredients'][$i]['name'],
            ]);
            $i++;
            if ($substitutes->json()['status'] == 'success'){
                $index_substitutes[] = $i;
            }
        }

        if ($response->status() == 200 and $response1->status() == 200 and $response2->status() == 200 and $response3->status() == 200) {
            $detailRecipe = $response->json();
            $ingredients = $response1->json();
            $tasteWidget = $response2;
            $summary = $response3->json();
            if (Auth::check()) {
                $favorite = Favorite::where('id_user', Auth::user()->id)->where('id_recipe', $id)->first();
                if ($favorite) {
                    $id_favorite = $favorite->id;
                } else {
                    $id_favorite = null;
                }
            } else {
                $id_favorite = null;
            }
            // $nutritionLabel = $response3;
            // dd($ingredients);
            // dd($detailRecipe);
            return view('landingpage.detail_food', compact('detailRecipe', 'ingredients', 'tasteWidget', 'summary', 'id_favorite', 'index_substitutes'));
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


    public function IngredientSubstitutes($ingredients)
    {
        $apiKey = env('API_KEY');
        $response = Http::get("https://api.spoonacular.com/food/ingredients/substitutes",  [
            'apiKey' => $apiKey,
            'ingredientName' => $ingredients,
        ]);
        if ($response->status() == 200) {
            $substitutes = $response->json();
            // dd($substitutes);
            return view('landingpage.ingredient_substitutes', compact('substitutes', 'ingredients'));
        } else {
            dd($response->status());
        }
    }

    public function imageAnalysis(Request $request)
    {
        $data = $request->all();
        if (!empty($data)) {
            $apiKey = env('API_KEY');
            $response = Http::get("https://api.spoonacular.com/food/images/analyze",  [
                'apiKey' => $apiKey,
                'imageUrl' => $request->image_url,
            ]);
            $response1 = Http::get("https://api.spoonacular.com/recipes/complexSearch", [
                'apiKey' => $apiKey,
                'query' => $response->json()['category']['name']
            ]);

            $url = $request->image_url;
            if (($response->status() == 200) && ($response1->status() == 200)) {
                $analysis = $response->json();
                $resultRecipes = $response1->json()['results'];
                // dd($Analysis);
                return view('landingpage.image_analysis', compact('analysis','url','resultRecipes'));
            } else {
                dd($response->status());
            }
        } else{
            return view('landingpage.image_analysis');
        }
    }
}
