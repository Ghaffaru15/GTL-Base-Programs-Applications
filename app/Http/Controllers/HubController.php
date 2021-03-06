<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HubController extends Controller
{
    //
    public function store(HubApplicationRequest $request)
    {
    	
    	$user = User::create($request->all());
        
    	# code...
    	$file = $request->file('logo');
    	// $ext = 
    	// $file->storeAs('hubs/logos', $user->id . '.png');
    	// Storage::put('/hubs/logos/'. $user->id . 'png',$request->file('logo'));
        Storage::disk('s3')->put('ai/hubs/logos/' . $user->id . '.png',file_get_contents($file));
    	// dd($request->all());
    	session()->flash('message','Thank you for applying');
    	return redirect('/');
    }
}
