<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;

class clientController extends Controller
{
    //

    public function index()
	{
        $clients = Client::all();
        return view('back.clients.index',compact('clients'));

	}

	public function create()
	{		
        return view('back.clients.create');
		
	}
	

	public function store(Request $request)
	{
        $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required',
            'age' => 'required',
            'nationalite' => 'required',
            'adresse' => 'required',
            'dateNaissance' => 'required',
            'lieuNaissance' => 'required'
        ]);


        $client = new Client();
        $client->nom = $request->input('nom');
        $client->prenom = $request->input('prenom');
        $client->age = $request->input('age');
        $client->nationalite = $request->input('nationalite');
        $client->adresse = $request->input('adresse');
        $client->dateNaissance = $request->input('dateNaissance');
        $client->lieuNaissance = $request->input('lieuNaissance');
        $client->profession = $request->input('profession');
        $client->telephone = $request->input('telephone');
        $client->permisDate = $request->input('permisDate');

        $client->save();
        return redirect(route('clients'))->with('success','Client Ajouté avec succés');
		
	}


	public function edit($id)
	{
                $client = Client::find($id);
                return view('back.clients.edit',compact('client'));
		
	}


	public function update(Request $request,$id)
	{
                $request->validate([
                        'nom' => 'required|max:255',
                        'prenom' => 'required',
                        'age' => 'required',
                        'nationalite' => 'required',
                        'adresse' => 'required',
                        'dateNaissance' => 'required',
                        'lieuNaissance' => 'required'
                    ]);
            
            
                    $client = Client::find($id);
                    $client->nom = $request->input('nom');
                    $client->prenom = $request->input('prenom');
                    $client->age = $request->input('age');
                    $client->nationalite = $request->input('nationalite');
                    $client->adresse = $request->input('adresse');
                    $client->dateNaissance = $request->input('dateNaissance');
                    $client->lieuNaissance = $request->input('lieuNaissance');
                    $client->profession = $request->input('profession');
                    $client->telephone = $request->input('telephone');
                    $client->permisDate = $request->input('permisDate');
            
                    $client->save();
                    return redirect(route('clients'))->with('success','Client Edité avec succés');
                    
		
	}


	public function destroy($id)
	{
                $client = Client::findOrFail($id);
                $client->delete();
	}
}
