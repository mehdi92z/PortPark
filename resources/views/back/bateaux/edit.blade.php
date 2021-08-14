@extends('back.layout')

@section('content')
<div class="col-md-12">

	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Modifier un bateau</h3>
		</div>

		<form role="form" action="{{ route('bateau.update',$bateau->id) }}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="card-body">
				<div class="form-group row">
					<div class="col">
						<label for="name">Nom bateau</label>
						<input type="text" class="form-control" id="name" name="nom" value="{{$bateau->nom}}">
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="type">Type bateau</label>
						<input type="text" class="form-control" id="type" name="type" value="{{$bateau->type}}">
					</div>
				</div><div class="form-group row">
					<div class="col">
						<label for="indicatif">Indicatif bateau</label>
						<input type="text" class="form-control" id="indicatif" name="indicatif" value="{{$bateau->indicatif}}">
					</div>
				</div><div class="form-group row">
					<div class="col">
						<label for="poid">Poid bateau</label>
						<input type="text" class="form-control" id="code" name="poid" value="{{$bateau->poid}}">
					</div>
				</div><div class="form-group row">
					<div class="col">
						<label for="longueur">Longueur bateau</label>
						<input type="text" class="form-control" id="longueur" name="longueur" value="{{$bateau->longueur}}">
					</div>
				</div><div class="form-group row">
					<div class="col">
						<label for="largeur">Largeur bateau</label>
						<input type="text" class="form-control" id="largeur" name="largeur" value="{{$bateau->largeur}}">
					</div>
				</div><div class="form-group row">
					<div class="col">
						<label for="client_id">Nom client</label>

						<input disabled type="text" class="form-control" id="client_id" name="client_id" value="{{$bateau->client->nom}}" >
					</div>
				</div>
				
				
				
            </div>
			<!-- /.card-body -->
			<div class="card-footer">
				<button type="submit" class="btn btn-primary">Modifier !</button>
			</div>
		</form>
	</div>
	<!-- /.card -->
	<!-- Form Element sizes -->
	
	<!-- /.card -->
</div>
@endsection

@section('script')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
@endsection