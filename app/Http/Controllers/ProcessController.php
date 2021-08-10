<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function exist($id)
	{
        $client=Client::find($id); 
        return view('back.process.exist',compact('client'));
		
	}

    public function blocks()
	{
        return view('back.process.blocks');
		
	}
}
