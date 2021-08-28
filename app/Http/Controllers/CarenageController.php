<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Block;
use App\Bateau;
use App\Order;
use App\Carenage;
class CarenageController extends Controller
{
    //
    public function facture(){
        return view('back.carenage.facture');
    }

    public function store(Request $request){
        $carenage = new Carenage();
        $carenage->id_bateau = $request->input('id_bateau');
        
        $carenage->client_id = $request->input('id_client');

        $carenage->date_debut=\Carbon\Carbon::now();
        $carenage->etat='en cours';
        $carenage->save();
        return redirect()->route('carenage/index');
    }
    public function index (){
        $carenages= Carenage::where('etat','en cours')->get();
        
        $carenagest= Carenage::where('etat','Terminer')->get();

        return view('back.carenage.index',compact('carenages','carenagest')); 
     }


     public function terminer ($id){
        $carenage= Carenage::find($id);
        $carenage->etat='Terminer';
        $carenage->date_fin=\Carbon\Carbon::now();


		$start_time = \Carbon\Carbon::parse($carenage->date_debut);
		$finish_time = \Carbon\Carbon::parse($carenage->date_fin);
		$result = $start_time->diffInDays($finish_time, false);
        $carenage->tarif=2202*($result-1);
        $carenage->save();
        return view('back.carenage.facture');

     }
}
