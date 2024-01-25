<?php

use App\Http\Controllers\RecipesController;
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

Route::get('/search', [RecipesController::class, 'featchRecipes'])->name('featchRecipes');
Route::get('/detail-recipe{id}', [RecipesController::class, 'detailRecipe'])->name('detailRecipe');
