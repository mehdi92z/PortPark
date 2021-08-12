@extends('back.layout')
@section('content')
<br><br><br>

<section class="content">
    <div class="container-fluid">
      <!-- COLOR PALETTE -->
      <div class="card card-default color-palette-box">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-tag"></i>
            Places Disponible
          </h3>
        </div>
        @foreach ($blocks as $block)
            
        
            <div class="card-body">
                    <div class="col-12">
                        <h5 class="text-center">{{$block->nom}}</h5>
                    </div>
                    <!-- /.col-12 -->
                    <div class="row">
                            <?php 
                            $array = $block->disponible;
                            $array2 = json_decode($array);
                            ?>
                    @foreach ($array2 as $element)
                            <!-- /.col -->
                            <div class="col-sm-4 col-md-2">
                            <h4 class="text-center">{{$element}}</h4>

                            <div class="color-palette-set">
                                <div class="bg-success color-palette text-center"><span>libre</span></div>
                                <div class="bg-success disabled color-palette text-center"><span>Reserver</span></div>
                            </div>
                            </div>
                    @endforeach
        </div>            
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="card card-default color-palette-box">
            @endforeach

            <!-- /.col -->
            <!--
                <div class="col-sm-4 col-md-2">
                <h4 class="text-center">A2</h4>

                <div class="color-palette-set">
                    <div class="bg-warning color-palette text-center"><span>presque</span></div>
                    <div class="bg-warning disabled color-palette text-center"><span>Reserver</span></div>
                </div>
                </div>

                
                <div class="col-sm-4 col-md-2">
                <h4 class="text-center">A3</h4>

                <div class="color-palette-set">
                    <div class="bg-danger color-palette text-center"><span>Occupé</span></div>
                    <div class="bg-danger disabled color-palette text-center"><span>Reserver</span></div>
                </div>
                </div>
            -->
            <!-- /.col -->
        </div>
    </div><!-- /.container-fluid -->
  </section>


@endsection