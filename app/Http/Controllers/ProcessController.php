<?php

namespace App\Http\Controllers;

use App\Bateau;
use App\Block;
use App\Client;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function exist($id)
	{
        $client=Client::find($id); 
        return view('back.process.exist',compact('client'));
		
	}

    public function blocks(Request $request)
	{
        $blocks = Block::all();
        $bateau = Bateau::find($request->input('id_bateau') );
        return view('back.process.blocks',compact('bateau','blocks'));
		
	}
}
