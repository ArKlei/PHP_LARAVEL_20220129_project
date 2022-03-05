<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
        return view('home');
      })->name('home');



Route::prefix('article_images')->group(function() {
        
        //Index
        Route::get('', 'App\Http\Controllers\ArticleImageController@index')->name('article_image.index');
        //Create
        Route::get('create', 'App\Http\Controllers\ArticleImageController@create')->name('article_image.create');
        Route::post('store', 'App\Http\Controllers\ArticleImageController@store' )->name('article_image.store');
        // Edit form, id
        Route::get('edit/{article_image}', 'App\Http\Controllers\ArticleImageController@edit')->name('article_image.edit');
        Route::post('update/{article_image}', 'App\Http\Controllers\ArticleImageController@update')->name('article_image.update');
        //Delete
        Route::post('destroy/{article_image}', 'App\Http\Controllers\ArticleImageController@destroy' )->name('article_image.destroy');
        //Show
        Route::get('show/{article_image}', 'App\Http\Controllers\ArticleImageController@show')->name('article_image.show');

});


Route::prefix('articles')->group(function() {

        //Index
        Route::get('', 'App\Http\Controllers\ArticleController@index')->name('article.index');
        //Create
        Route::get('create', 'App\Http\Controllers\ArticleController@create')->name('article.create');
        Route::post('store', 'App\Http\Controllers\ArticleController@store' )->name('article.store');
        //Edit form, id
        Route::get('edit/{article}', 'App\Http\Controllers\ArticleController@edit')->name('article.edit');
        Route::post('update/{article}', 'App\Http\Controllers\ArticleController@update')->name('article.update');
        //Delete
        Route::post('destroy/{article}', 'App\Http\Controllers\ArticleController@destroy' )->name('article.destroy');
        //Show
        Route::get('show/{article}', 'App\Http\Controllers\ArticleController@show')->name('article.show');

});

Route::prefix('article_categories')->group(function() {

        //Index
        Route::get('', 'App\Http\Controllers\ArticleCategoryController@index')->name('article_category.index');
        //Create
        Route::get('create', 'App\Http\Controllers\ArticleCategoryController@create')->name('article_category.create');
        Route::post('store', 'App\Http\Controllers\ArticleCategoryController@store' )->name('article_category.store');
        //Edit form, id
        Route::get('edit/{article_category}', 'App\Http\Controllers\ArticleCategoryController@edit')->name('article_category.edit');
        Route::post('update/{article_category}', 'App\Http\Controllers\ArticleCategoryController@update')->name('article_category.update');
        //Delete
        Route::post('destroy/{article_category}', 'App\Http\Controllers\ArticleCategoryController@destroy' )->name('article_category.destroy');
        //Show
        Route::get('show/{article_category}', 'App\Http\Controllers\ArticleCategoryController@show')->name('article_category.show');
  
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');


