<?php

namespace App\Http\Controllers;

use App\Block;
use Illuminate\Http\Request;

class blockController extends Controller
{
    
	public function index()
	{
        $blocks= Block::all();
        return view('back.blocks.index',compact('blocks'));
	}

	public function create()
	{		
        return view('back.blocks.create');
		
	}
	

	public function store(Request $request)
	{

        $request->validate([
            'nom' => 'required|max:1',
            'capacite' => 'required'
        ]);



        $block = new Block();
        $block->nom = $request->input('nom');
        $block->capacite = $request->input('capacite');
        $block->disponiblen =$block->capacite ;
        $block->indisponiblen=0;
        $int = (int)$block->capacite;
        $array=array();
        for ($i=1; $i<=$int; $i++) {
            $element = $block->nom . $i;
            $array[]=$element;
        }
        $block->disponible=json_encode($array);
        $indisponible=array();
        $block->indisponible=json_encode($indisponible);
        $block->save();
        /*
            json_encode($data) //converts an array to JSON string
            json_decode($jsonString) //converts json string to php array
         */
        
        return redirect()->back()->with('success','تم الطلب بنجاح!!');

		
	}





}
