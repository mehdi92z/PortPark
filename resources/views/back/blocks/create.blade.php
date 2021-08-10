@extends('back.layout')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Blocks</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Accueil</a></li>
          <li class="breadcrumb-item active">Blocks</li>
        </ol>
      </div>
    </div>
  </div>
</section>
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
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
  </div>


@endsection