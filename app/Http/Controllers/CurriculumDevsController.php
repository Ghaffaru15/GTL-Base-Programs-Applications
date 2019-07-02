<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CurriculumDev;

class CurriculumDevsController extends Controller
{
    //

    public function store(CurriculumDevRequest $request)
    {
    	CurriculumDev::create()
    }
}
