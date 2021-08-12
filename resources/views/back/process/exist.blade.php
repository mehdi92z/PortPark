@extends('back.layout')
@section('content')

<br><br>

<h1 style="text-align: center">{{$client->nom .' '. $client->prenom}}</h1>
<div class="col-md-3 col-sm-6 col-12">
    <a href={{ route('bateau2/create', ['id_client'=>$client->id]) }}>
    <div class="info-box">
      <span class="info-box-icon bg-success"><i class="fas fa-plus"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Nouveau navire</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </a>
</div>

<div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Horizontal Form</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action = {{ route('process/blocks') }} >
        @csrf
      <div class="card-body">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Navire</label>
          <div class="col-sm-10">
              <select name="id_bateau" id="" class="custom-select">
                  @foreach ($client->bateaus as $bateau)
                  <option value="{{$bateau->id}}">{{$bateau->nom}}</option>
                  @endforeach
              </select>
          </div>
        </div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info">Select</button>
        <button type="submit" class="btn btn-default float-right">Cancel</button>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>

    
@endsection