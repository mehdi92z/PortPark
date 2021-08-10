@extends('back.layout')
@section('content')





<br><br>
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Ajouter un Client</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action={{ route('client/store') }}>
      @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nom">nom</label>
                <input type="text" class="form-control" id="" name='nom'>
            </div>

            <div class="form-group">
                <label for="prenom">prenom</label>
                <input type="text" class="form-control" id="" name='prenom'>
            </div>
            
            <div class="form-group">
                <label for="">age</label>
                <input type="number" class="form-control" id="" name='age'>
            </div>

            <div class="form-group">
                <label for="nationalite">nationalité</label>
                <input type="text" class="form-control" id="" name='nationalite'>
            </div>

            <div class="form-group">
                <label for="adresse">adresse</label>
                <input type="text" class="form-control" id="" name='adresse'>
            </div>

            <div class="form-group">
                <label for="dateNaissance">date de Naissance</label>
                <input type="date" class="form-control" id="" name='dateNaissance'>
            </div>

            <div class="form-group">
                <label for="lieuNaissance">lieu de Naissance</label>
                <input type="text" class="form-control" id="" name='lieuNaissance'>
            </div>
            <div class="form-group">
                <label for="profession">profession</label>
                <input type="text" class="form-control" id="" name='profession'>
            </div>
            <div class="form-group">
                <label for="telephone">telephone</label>
                <input type="text" class="form-control" id="" name='telephone'>
            </div>

            <div class="form-group">
                <label for="permisDate">permis Date delivré</label>
                <input type="date" class="form-control" id="" name='permisDate'>
            </div>


        
        
        </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
  </div>
















@endsection