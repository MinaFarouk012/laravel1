<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    function listProducts(){
   	$products = Products::get();
	return view('listproducts', [
   		'products'=> $products
   	]); 
   }
   function Price(){
   	$products= Products::where('price', '>', '100')->get();
	   	return view('productsprice', [
   		'products'=> $products
   	]); 
   }
}
