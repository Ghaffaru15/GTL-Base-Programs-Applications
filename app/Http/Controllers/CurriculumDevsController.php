<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CurriculumDev;
use App\Http\Requests\CurriculumDevRequest;

class CurriculumDevsController extends Controller
{
    //

    public function store(CurriculumDevRequest $request)
    {
    	$file = $request->file('proposal');
    	$ext = $file->getClientOriginalExtension();	
    	$user = CurriculumDev::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'phone_number' => $request->phone_number,
    		'proposal' => $ext
    	]);
    	$file->storeAs('curriculum/proposals', $user->id . '.' . $ext);

    	session()->flash('message','Thank you for applying');
    	return redirect()->back();
    }
}
