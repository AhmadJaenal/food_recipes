<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RestaurantsController;

/*
|--------------------------------------------------------------------------
| Kelompok 4 (IF-5)
|--------------------------------------------------------------------------
|
| 10121167 - Ahmad Jaenal Aripin
| 10121196 - Adinda Regita A C
| 10121204 - Stefan Setiadi D P
|
*/

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/', [RecipesController::class, 'featchRecipes'])->name('featchRecipes');
Route::get('/detail-recipe{id}', [RecipesController::class, 'detailRecipe'])->name('detailRecipe');

Route::get('/search-recipe', [SearchController::class, 'searchGrocery'])->name('searchGrocery');
Route::get('/category-food{type}', [RecipesController::class, 'foodCategory'])->name('foodCategory');

Route::get('/search-restaurants', [SearchController::class, 'searchRestaurants'])->name('searchRestaurants');

Route::get('favorites', [FavoriteController::class, 'favorites'])->name('favorites')->middleware('auth');
Route::post('addFavorite', [FavoriteController::class, 'addFavorite'])->name('addFavorite')->middleware('auth');
Route::post('removeFavorite', [FavoriteController::class, 'removeFavorite'])->name('removeFavorite')->middleware('auth');

Route::get('ingredientSubst{ingredients}', [RecipesController::class, 'IngredientSubstitutes'])->name('ingredientSubst');
Route::get('imageAnalysis', [RecipesController::class, 'imageAnalysis'])->name('imageAnalysis');

Route::get('/create-blog', [BlogController::class, 'createBlog'])->name('createBlog')->middleware('auth');
Route::post('/post/{id}/{action}', [BlogController::class, 'postBlog'])->name('postBlog')->middleware('auth');
Route::get('/page-blog', [BlogController::class, 'pageBlog'])->name('pageBlog')->middleware('auth');
Route::get('/detail-blog/{id}', [BlogController::class, 'detailBlog'])->name('detailBlog')->middleware('auth');
Route::get('/delete-blog', [BlogController::class, 'deleteBlog'])->name('deleteBlog')->middleware('auth');
Route::get('/getBlogData/{id}', [BlogController::class, 'getBlogData'])->name('getBlogData');
Route::get('/publish-blog', [BlogController::class, 'publishBlog'])->name('publishBlog');

Route::fallback(function () {
    return response()->view('errorpage.error_404', [], 404);
});