<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;

class CustomersController extends Controller
{
    function listCustomers(){
    	$customers= Customers::get();
	   	return view('listcustomers', [
    		'customers'=> $customers
    	]); 
    }
    function City(){
    	$customers= Customers::where('customerCity', '=', 'cairo')->get();
	   	return view('citycustomers', [
    		'customers'=> $customers
    	]); 
    }

}
