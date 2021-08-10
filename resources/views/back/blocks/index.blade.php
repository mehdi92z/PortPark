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

<div class="row">
    <div class="col-12">
      <div class="card">
       <div class="container">
          <div class="card-header row">
            <div class="col-lg-6">
              <h3 class="card-title">Liste des blocks</h3>
            </div>
            
            <span class="col-lg-4"></span>
            <a href="{{route('block/create')}}" class="btn btn-primary col-lg-2">Nouveau block</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table id="example1" class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Capacité</th>
                <th>action</th>
                <th>Places diponible</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($blocks as $block)
                    
                
                    <tr>
                        <td> {{$block->id}} </td>
                        <td>{{$block->nom}}</td>
                        <td>{{$block->capacite}}</td>
                        <td>
                            
                        <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                            <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu" style="">
                            <a class="dropdown-item " href="#">Edit</a>
                            <a class="dropdown-item " href="#">Delete</a>
                            <a class="dropdown-item " href={{ route('reservation/create', ['id'=>$block->id]) }}>Ajouter Client</a>
                            </div>
                        </div>

                        </td>
                        <td><span style=" background-color:   @if ($block->disponiblen<5)
                                                                red
                                                              @else
                                                              
                                                              @endif
                         ">{{$block->disponiblen}}</span></td>
                    </tr>
                @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div>





@endsection


@section('script')
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>






<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
    
@endsection