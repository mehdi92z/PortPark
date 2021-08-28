@extends('back.layout')
@section('import')
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
@if($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">x</button>
	<strong>{{ $message }}</strong>
</div>
@endif
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Bateaux</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{route('home')}}">Accueil</a></li>
					<li class="breadcrumb-item active">Bateaux</li>
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
							<h3 class="card-title">Liste des bateaux</h3>
						</div>
						
						<span class="col-lg-4"></span>
						<a href="{{route('bateau.create')}}" class="btn btn-primary col-lg-2">Nouveau bateau</a>
					</div>
				</div>
				
				<div class="card-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Nom client</th>
								<th>Nom bateau</th>
								<th>Type</th>
								<th>Indicatif</th>
								<th>Poids</th>
								<th>Longueur</th>
								<th>Largeur</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($bateaux as $bateau)
							<tr>
								<td>{{$bateau->client->nom}}</td>
								<td>{{$bateau->nom}}</td>
								<td>{{$bateau->type}}</td>
								<td>{{$bateau->indicatif}}</td>
								<td>{{$bateau->poids}}</td>
								<td>{{$bateau->longueur}}</td>
								<td>{{$bateau->largeur}}</td>
								<td>
									<form action="{{route('bateau.destroy',$bateau->id)}}" method="Post">
										@method('DELETE')
										@csrf
										<button type="submit" class="btn btn-xs btn-danger mb-lg-2"  onclick="return confirm('Etes vous sur ?')">Supprimer</button>
									</form>
									
									<form action="{{route('passage/store')}}" method="Post">
										@csrf
										<input name="id_bateau" type="hidden" value={{$bateau->id}}>
										<input name="id_client" type="hidden" value={{$bateau->client->id}}>
										<button type="submit" class="btn btn-xs btn-success mb-lg-2"  onclick="return confirm('Etes vous sur ?')">passage</button>
									</form>
									<form action="{{route('carenage/store')}}" method="Post">
										@csrf
										<input name="id_bateau" type="hidden" value={{$bateau->id}}>
										<input name="id_client" type="hidden" value={{$bateau->client->id}}>
										<button type="submit" class="btn btn-xs btn-success mb-lg-2"  onclick="return confirm('Etes vous sur ?')">carenage</button>
									</form>
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
<script>
$(function () {
$('#example2').DataTable({
	"language": {
        url: "{{asset('datatable.json')}}"
    },
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