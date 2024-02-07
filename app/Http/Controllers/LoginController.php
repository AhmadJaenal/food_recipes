<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            Session::flash('error', 'Oops, please log in first.');
            return redirect()->back();
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            $apiKey = env('API_KEY');
            $response = Http::get("https://api.spoonacular.com/food/search", [
                'apiKey' => $apiKey,
            ]);
            if ($response->status() == 200) {
                $recipes = $response->json()['searchResults'][0]['results'];
                return redirect()->back()->with(compact('recipes'));
            } else {
                dd($response->status());
            }
            return redirect();
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect()->back();
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect()->back();
    }
}