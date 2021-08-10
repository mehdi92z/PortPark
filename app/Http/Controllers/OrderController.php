<?php

namespace App\Http\Controllers;
use App\Client;
use App\Block;
use App\Bateau;
use App\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function create($id_client,$id_bateau)
	{		

        $bateau= Bateau::find($id_bateau);
        $client= Bateau::find($id_client);

        return view('back.orders.create',compact('client','bateau'));
	}

    public function createWithBoat($id_client)
	{		
        $client= Bateau::find($id_client);

        return view('back.orders.createWithBoat',compact('client'));
	}

	

	public function store()
	{
		
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
