<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function index(){
    	if (auth()->user()->is_admin){
    		return view('admin');
    	} 
    }

}
