<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\HubApplicationRequest;

class UserController extends Controller
{
    //

    public function store(HubApplicationRequest $request)
    {
    	
    	$user = User::create($request->all());
    	# code...
    	$file = $request->file('logo');
    	// $ext = 
    	$file->storeAs('hubs/logos', $user->id . '.png');
    	// Storage::put('/hubs/logos/'. $user->id . 'png',$request->file('logo'));

    	// dd($request->all());
    	session()->flash('message','Thank you for applying');
    	return redirect('/');
    }
}
