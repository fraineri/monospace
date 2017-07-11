<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function edit(){
		if(!(\Auth::check()))
			return redirect('login');

		return view('users/edit');
	}

	public function update(){
		if(!(\Auth::check()))
			return redirect('login');

		return view('index');
	}

}
