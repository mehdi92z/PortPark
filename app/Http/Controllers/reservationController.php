<?php

namespace App\Http\Controllers;
use App\Block;
use App\Reservation;


use Illuminate\Http\Request;

class reservationController extends Controller
{
    //


    public function create($id)
	{
        $block= Block::find($id);
        return view('back.reservations.create',compact('block'));
		
	}

    public function store(Request $request,$id)
	{
        $request->validate([
            'nomclient' => 'required|max:255',
            'navire' => 'required'
        ]);

        $block= Block::find($id);
        $reservation = new Reservation();
        $reservation->nomclient = $request->input('nomclient');
        $reservation->navire = $request->input('navire');
        $reservation->nomplace = $request->input('nomplace');
        $reservation->nomblock = $block->nom; 
        $block->disponiblen=(int)$block->disponiblen - 1 ;
        $block->indisponiblen=(int)$block->indisponiblen + 1 ;

        $array = json_decode($block->disponible) ;
        $array= \array_diff($array, [$reservation->nomplace]);
        $array = array_values($array);
        //dd($array);
        $block->disponible=json_encode($array);
        //dd($block->disponible);
        $array = json_decode($block->indisponible) ;
        $array[]=$reservation->nomplace;
        $block->indisponible=json_encode($array);
        
        $reservation->save();
        $block->save();
        
        return redirect()->back()->with('success','ok');

    }


}
