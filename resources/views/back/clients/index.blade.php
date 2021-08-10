@extends('back.layout')
@section('content')

<br><br><br>


<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nom et Prenom</th>
          <th>Age</th>
          <th>Date de naissance</th>
          <th>N Telephone</th>
          <th>action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($clients as $client)
            <tr>
            <td>{{$client->nom}} {{$client->prenom}}</td>
            <td>{{$client->age}}</td>
            <td>{{$client->dateNaissance}}</td>
            <td> {{$client->telephone}}</td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu" style="">
                    <a class="dropdown-item " href="{{route('client/edit',['id'=>$client->id])}}">Modifier</a>
                    <a class="dropdown-item " href="#" onclick="return confirm('vous etes sur de vouloir le supprimer')">Supprimer</a>
                    <a class="dropdown-item " href='#'>Ajouter un bateau</a>
                    </div>
                </div>
            </td>
            </tr>
        @endforeach
        <tr>
          <td>Trident</td>
          <td>Internet
            Explorer 5.0
          </td>
          <td>Win 95+</td>
          <td>5</td>
          <td>C</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
          <th>Platform(s)</th>
          <th>Engine version</th>
          <th>CSS grade</th>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
<br>
  
<a class="btn btn-primary" href={{route('client/create')}}>Ajouter un Client</a>

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