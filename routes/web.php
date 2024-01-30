<?php

use App\Http\Controllers\RecipesController;
use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');


Route::get('/', [RecipesController::class, 'featchRecipes'])->name('featchRecipes');
Route::get('/detail-recipe{id}', [RecipesController::class, 'detailRecipe'])->name('detailRecipe');

Route::get('/search-recipe', [SearchController::class, 'searchGrocery'])->name('searchGrocery');
Route::get('/category-food{type}', [RecipesController::class, 'foodCategory'])->name('foodCategory');

Route::get('/search-restaurants', [SearchController::class, 'searchRestaurants'])->name('searchRestaurants');
