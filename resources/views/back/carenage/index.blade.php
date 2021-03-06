@extends('back.layout')
@section('content')

<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Carenages</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{route('home')}}">Accueil</a></li>
					<li class="breadcrumb-item active">Carenage</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="container">
					<div class="card-header row">
						<div class="col-lg-6">
							<h3 class="card-title">Liste des bateaux en carenage en cours</h3>
						</div>
						
						
					</div>
				</div>
				
				<div class="card-body">
					<table id="example1" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Nom et Prenom</th>
                <th>Nom bateau</th>
                <th>Date de debut</th>
                <th>N Telephone</th>
                <th>action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($carenages as $carenage)
							<tr>
								<td>{{$carenage->client->nom}} </td>
                <td>{{$carenage->bateau->nom}}</td>
                <td>{{$carenage->date_debut}}</td>
                <td> {{$carenage->client->telephone}}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>

                        <div class="dropdown-menu" role="menu" style="">
                        <a class="dropdown-item " href="{{route('carenage/terminer',['id'=>$carenage->id])}}">Terminer</a>
                        <a class="dropdown-item " href="#" >Annuler</a>
                        </div>
                    </div>
                </td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
				</div>
				<!-- /.card-body -->
			</div>
		</div>
	</div>
    <div class="row">
		<div class="col-12">
			<div class="card">
				<div class="container">
					<div class="card-header row">
						<div class="col-lg-6">
							<h3 class="card-title">Liste des bateaux en carenage Terminer</h3>
						</div>
						
						
					</div>
				</div>
				
				<div class="card-body">
					<table id="example1" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Nom et Prenom</th>
                <th>Nom bateau</th>
                <th>Date de debut</th>
                <th>N Telephone</th>
                <th>action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($carenagest as $carenage)
							<tr>
								<td>{{$carenage->client->nom}} </td>
                <td>{{$carenage->bateau->nom}}</td>
                <td>{{$carenage->date_debut}}</td>
                <td> {{$carenage->client->telephone}}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>

                        <div class="dropdown-menu" role="menu" style="">
                        <a class="dropdown-item " href={{route('carenage/facture',['id'=>$carenage->id])}} >Facture</a>
                        </div>
                    </div>
                </td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
				</div>
				<!-- /.card-body -->
			</div>
		</div>
	</div>
</section>



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
  });
</script>
    
@endsection