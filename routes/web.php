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
    return view('Layouts/home');
});

Route::get('/test', 'ProductsController@test');
Route::get('/products/all', 'ProductsController@listProducts');
Route::get('/customers/all', 'CustomersController@listCustomers');
Route::get('/customers_city', 'CustomersController@City');
Route::get('/products_price', 'ProductsController@Price');
Route::post('/customers/add', 'CustomersController@Add');
Route::post('/products/add', 'ProductsController@Add');

