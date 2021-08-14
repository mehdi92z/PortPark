@extends('back.layout')
@section('content')





<br><br>
<div class="card card-primary">
  
    <div class="card-header">
      <h3 class="card-title">Ajouter une Reservation A {{$bateau->client->nom .' '. $bateau->client->prenom}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action={{route('order/store')}}>
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
                <label for="place">Place</label>
                <select name="place" class="form-control">
                    <?php
                    $array = json_decode($block->disponible);
                    ?>
                    @foreach ($array as $item)
                    <option value={{$item}}>{{$item}}</option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" value="{{$bateau->id}}" name="id_bateau">
            <input type="hidden" value="{{$block->id}}" name="id_block" >


        
        
        </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
  </div>
















@endsection