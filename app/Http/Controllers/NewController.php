<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function show($section){
    	return view('news/show',compact('section'));
    }

}
