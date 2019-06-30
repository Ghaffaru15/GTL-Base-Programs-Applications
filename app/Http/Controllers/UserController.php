<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //

    public function store()
    {
    	
    	User::create(request()->all());
    	# code...
    	return redirect()->back();
    }
}
