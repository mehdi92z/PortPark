<?php

namespace App\Http\Controllers;
use App\Client;
use App\Block;
use App\Bateau;
use App\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function create($id_bateau,$id_block)
	{		

        $bateau= Bateau::find($id_bateau);
		$block = Block::find($id_block);

        return view('back.orders.create',compact('bateau','block'));
	}

    public function createWithBoat($id_client)
	{		
        $client= Client::find($id_client);

        return view('back.orders.createWithBoat',compact('client'));
	}

	

	public function store(Request $request)
	{
		$request->validate([
            'dateD' => 'required',
            'dateF' => 'required',
            'place' => 'required'
        ]);

		$bateau = Bateau::find($request->input('id_bateau'));
		$block = Block::find($request->input('id_block'));
		$order = new Order();
		$order->client_id=$bateau->client->id;
		$order->id_bateau=$bateau->id;
		$order->nom_client=$bateau->client->nom;
		$order->nom_bateau=$bateau->nom;
		$order->type_bateau=$bateau->type;
		$order->longueur_bateau=$bateau->longueur;
		$order->tarifs=0;
		$order->dateD = $request->input('dateD');
		$order->dateF = $request->input('dateF');
		$order->nom_place = $request->input('place');
		////reglage place en nombre disponible
        $block->disponiblen=(int)$block->disponiblen - 1 ;
        $block->indisponiblen=(int)$block->indisponiblen + 1 ;

		////reglage place en list disponible
		$array = json_decode($block->disponible) ;
        $array= \array_diff($array, [$order->nom_place]);
        $array = array_values($array);
        //dd($array);
        $block->disponible=json_encode($array);

		$array = json_decode($block->indisponible) ;
        $array[]=$order->nom_place;
        $block->indisponible=json_encode($array);

		
		$block->save();
		$order->save();
		return redirect(route('process/places'));
		
	}


	public function edit()
	{
		
	}


	public function update()
	{
		
	}


	public function destroy()
	{
		
	}



}
