<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NationalPitch;
use App\Http\Requests\NationalPitchRequest;
class NationalPitchController extends Controller
{
    //
    public function store(NationalPitchRequest $request)
    {
        # code...
        $data = NationalPitch::create($request->all());
        session()->flash('message','Thank you for coming');
        return redirect()->back();
    }
}
