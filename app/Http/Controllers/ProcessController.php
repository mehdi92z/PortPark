<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function exist()
	{
        return view('back.process.exist');
		
	}

    public function blocks()
	{
        return view('back.process.blocks');
		
	}
}
