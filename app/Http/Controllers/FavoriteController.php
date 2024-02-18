<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function favorites()
    {
        // $favorites = Favorite::all();
        $favorites = Favorite::where('id_user', Auth::user()->id)->get();
        return view('landingpage.favorites', compact('favorites'));
    }
    public function addFavorite(Request $request)
    {
        $favorite = Favorite::create([
            'id_user' => Auth::user()->id,
            'id_recipe' => $request->id_recipe,
            'title' => $request->title,
            'image' => $request->image,
        ]);
        return redirect()->back();
    }
    public function removeFavorite(Request $request)
    {
        $id_favorite = Favorite::where('id_user', Auth::user()->id)->where('id_recipe', $request->id_recipe)->first()->id;
        $favorite = Favorite::where('id', $id_favorite)->delete();
        return redirect()->back();
    }
}
