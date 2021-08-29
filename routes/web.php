<?php

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


Route::namespace('\App\Http\Controllers\Site')->group(function(){ 
    
    
Route::get('/', HomeController::class)->name('site.home.index'); 

Route::get('/products', 'CategoryProductsController@index')->name('site.category.index');
Route::get('/products/{slug}', 'CategoryProductsController@show');

Route::get('/blog', BlogController::class)->name('site.blog.index');
Route::view('/about', 'site.about.index');

Route::get('/contact', 'ContactController@index')->name('site.contact.index');
Route::post('/contact', 'ContactController@form');

});