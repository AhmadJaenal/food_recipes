<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function favorites()
    {
        $favorites = Favorite::where('id_user', Auth::user()->id)->get();
        return view('landingpage.favorites', compact('favorites'));
    }
    public function addFavorite(Request $request)
    {   
        $userId = Auth::user()->id;
        $recipeId = $request->id_recipe;
        $existingFavorite = Favorite::where('id_user', $userId)
                                ->where('id_recipe', $recipeId)
                                ->first();
        if(!$existingFavorite){
            $favorite = Favorite::create([
                'id_user' => $userId,
                'id_recipe' => $recipeId,
                'title' => $request->title,
                'image' => $request->image,
            ]);
            return response()->json(['success' => true]);
        } else{
            return response()->json(['failed' => true]);
        }
    }
    public function removeFavorite(Request $request)
    {
        $id_favorite = Favorite::where('id_user', Auth::user()->id)->where('id_recipe', $request->id_recipe)->first()->id;
        $favorite = Favorite::where('id', $id_favorite)->delete();

        return response()->json(['success' => true]);
    }
}
