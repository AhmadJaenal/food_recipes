<?php

use App\Http\Controllers\RecipesController;
use App\Http\Controllers\SearchController;
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

Route::get('/', function () {
    return view('landingPage.index');
});

Route::get('/recipes', [RecipesController::class, 'featchRecipes'])->name('featchRecipes');
Route::get('/detail-recipe{id}', [RecipesController::class, 'detailRecipe'])->name('detailRecipe');

Route::get('/search-recipe', [SearchController::class, 'searchGrocery'])->name('searchGrocery');
Route::get('/category-food{type}', [RecipesController::class, 'foodCategory'])->name('foodCategory');
