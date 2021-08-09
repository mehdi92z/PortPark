@extends('back.layout')
@section('import')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
@endsection
@section('content')
<br><br><br><br>
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Ajouter un client dans le Block {{$block->nom}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action={{ route('reservation/store', ['id'=>$block->id]) }}>
      @csrf
        <div class="card-body">
            <div class="form-group">
            <label for="">nomclient</label>
            <input type="text" class="form-control" id="" name='nomclient'>
            </div>


            
            <div class="form-group">
            <label for="">nomnavire</label>
            <input type="text" class="form-control" id="" name='navire'>
            </div>

                        
            
                <div class="form-group" data-select2-id="29">
                    <label>Minimal</label>
                    <select class="js-example-basic-single" name = 'nomplace' style="width: 100%;" >

                        @foreach ( json_decode($block->disponible) as $item)
                            <option value="{{$item}}">{{$item}}</option>    
                        @endforeach

                    </select>
                </div>
                  
        
        </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>


@endsection

@section('script')

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>

$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
@endsection