<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Block;
use App\Bateau;
use App\Order;
use App\Passage;


class PassageController extends Controller
{
    //

    public function facture($id)
	{
		$passage = Passage::find($id);
		return view('back.passage.facture',compact('passage'));
	}

    public function store(Request $request){
        
        $passage = new Passage();
        $passage->id_bateau = $request->input('id_bateau');
        
        $passage->client_id = $request->input('id_client');

        $passage->date=\Carbon\Carbon::now();
        
        $passage->save();
        return redirect()->route('passage/facture',['id'=>$passage->id]);
    }
}
