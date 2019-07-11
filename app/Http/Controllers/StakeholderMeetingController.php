<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StakeholderRequest;
use App\Stakeholder;
class StakeholderMeetingController extends Controller
{
    //

    public function store(StakeholderRequest $request)
    {
        Stakeholder::create($request->all());

    	session()->flash('message','Thank you and you are welcome');
        
        return redirect()->back();
    }
}
