@extends('back.layout')
@section('content')
<br><br><br><br>
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Ajouter un Block</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action={{ route('block/store') }}>
      @csrf
        <div class="card-body">
            <div class="form-group">
            <label for="">nom</label>
            <input type="text" class="form-control" id="" name='nom'>
            </div>


            

            <div class="form-group">
            <label for="">Capacité</label>
            <input type="number" class="form-control" id="" name='capacite'>
            </div>

            
            <div class="form-group">
            <label for="">Type de navire</label>
            <input type="text" class="form-control" id="" name='category'>
            </div>

        
        
        </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>


@endsection