<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){
    	if(\Auth::check()){
            return redirect('/news');
        }
        else{
            return view('index');
        }
    }
}
