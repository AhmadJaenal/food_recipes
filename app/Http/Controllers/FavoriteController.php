<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function favorites()
    {
        return view('landingpage.favorites');
    }
}
