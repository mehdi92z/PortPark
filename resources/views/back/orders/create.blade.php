@extends('back.layout')
@section('content')





<br><br>
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Ajouter une Reservation</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action=}>
      @csrf
        <div class="card-body">

            <div class="form-group">
                <label for="dateD">date debut </label>
                <input type="date" class="form-control" id="" name='dateD'>

            <div class="form-group">
                <label for="dateF">date fin</label>
                <input type="date" class="form-control" id="" name='dateF'>
            </div>
            
            <div class="form-group">
                <label for="dateF">Place</label>
                <input type="text" class="form-control" id="" name='nom_place'>
            </div>


        
        
        </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
  </div>
















@endsection