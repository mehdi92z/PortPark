@extends('back.layout')
@section('content')





<br><br>
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Editer le Client</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action={{route('client/update',['id'=>$client->id])}}>
      @csrf
      @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="nom">nom</label>
                <input type="text" class="form-control" id="" name='nom' value='{{old("nom",$client->nom)}}'  >
            </div>

            <div class="form-group">
                <label for="prenom">prenom</label>
                <input type="text" class="form-control" id="" name='prenom' value='{{old("prenom",$client->prenom)}}'>
            </div>
            
            <div class="form-group">
                <label for="">age</label>
                <input type="number" class="form-control" id="" name='age' value='{{old("age",$client->age)}}'>
            </div>

            <div class="form-group">
                <label for="nationalite">nationalité</label>
                <input type="text" class="form-control" id="" name='nationalite' value='{{old("nationalite",$client->nationalite)}}'>
            </div>

            <div class="form-group">
                <label for="adresse">adresse</label>
                <input type="text" class="form-control" id="" name='adresse' value='{{old("adresse",$client->adresse)}}'>
            </div>

            <div class="form-group">
                <label for="dateNaissance">date de Naissance</label>
                <input type="date" class="form-control" id="" name='dateNaissance' value='{{old("dateNaissance",$client->dateNaissance)}}'>
            </div>

            <div class="form-group">
                <label for="lieuNaissance">lieu de Naissance</label>
                <input type="text" class="form-control" id="" name='lieuNaissance' value='{{old("lieuNaissance",$client->lieuNaissance)}}'>
            </div>
            <div class="form-group">
                <label for="profession">profession</label>
                <input type="text" class="form-control" id="" name='profession' value='{{old("profession",$client->profession)}}'>
            </div>
            <div class="form-group">
                <label for="telephone">telephone</label>
                <input type="text" class="form-control" id="" name='telephone' value='{{old("telephone",$client->telephone)}}'>
            </div>

            <div class="form-group">
                <label for="permisDate">permis Date delivré</label>
                <input type="date" class="form-control" id="" name='permisDate' value='{{old("permisDate",$client->permisDate)}}'>
            </div>


        
        
        </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Modifier</button>
      </div>
    </form>
  </div>
















@endsection