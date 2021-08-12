@extends('back.layout')
@section('content')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
            <div class="inner"  style="text-align: center">
                <h1>A</h1>
                <h2 style="font-size: 50px"><strong>10</strong></h2>
                <p>30</p>
            </div>
            <a href="#" class="small-box-footer">Choisir <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>  
        
        @foreach ($blocks as $block)
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner"  style="text-align: center">
                        <h1>{{$block->nom}}</h1>
                        <h2 style="font-size: 50px"><strong>{{$block->disponiblen}}</strong></h2>
                        <p>{{$block->capacite}}</p>
                    </div>
                    <a href="#" class="small-box-footer">Choisir <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        @endforeach
        
    </div>

</div>   
@endsection