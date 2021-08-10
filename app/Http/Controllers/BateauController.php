<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bateau;
use App\Client;

class BateauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bateaux = Bateau::all();
        return view('back.bateaux.index',compact('bateaux'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_client)
    {
        $client = Client::find($id_client);
        return view('back.bateaux.create',compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|max:255',
            'type' => 'required|max:255',
            'indicatif' => 'required|max:255',
            'poid' => 'required|max:255',
            'longueur' => 'required|max:255',
            'largeur' => 'required|max:255',
            'client_id' => 'required|exists:clients,id'
        ]);
        Bateau::create($request->all());
        return redirect()->route('bateau.index')->with('success','Bateau creer avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bateau = Bateau::findOrFail($id);
        $bateau->delete();
        return redirect()->route('bateau.index')->with('success','Bateau supprimé avec succes');
    }
}
