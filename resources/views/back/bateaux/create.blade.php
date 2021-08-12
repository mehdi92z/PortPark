@extends('back.layout')

@section('content')
<div class="col-md-12">

	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Ajouter un bateau</h3>
		</div>

		<form role="form" action="{{ route('bateau.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<div class="form-group row">
					<div class="col">
						<label for="name">Nom bateau</label>
						<input type="text" class="form-control" id="name" name="nom" placeholder="Entrer nom bateau">
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="type">Type bateau</label>
						<input type="text" class="form-control" id="type" name="type" placeholder="Entrer type bateau">
					</div>
				</div><div class="form-group row">
					<div class="col">
						<label for="indicatif">Indicatif bateau</label>
						<input type="text" class="form-control" id="indicatif" name="indicatif" placeholder="Entrer indicatif bateau">
					</div>
				</div><div class="form-group row">
					<div class="col">
						<label for="poid">Poid bateau</label>
						<input type="text" class="form-control" id="code" name="poid" placeholder="Entrer poid bateau">
					</div>
				</div><div class="form-group row">
					<div class="col">
						<label for="longueur">Longueur bateau</label>
						<input type="text" class="form-control" id="longueur" name="longueur" placeholder="Entrer longueur bateau">
					</div>
				</div><div class="form-group row">
					<div class="col">
						<label for="largeur">Largeur bateau</label>
						<input type="text" class="form-control" id="largeur" name="largeur" placeholder="Entrer largeur bateau">
					</div>
				</div><div class="form-group row">
					<div class="col">
						<label for="client_id">ID client</label>

						<input type="text" class="form-control" id="client_id" name="client_id" value="{{$client->id}}" >
					</div>
				</div>
				
				
            </div>
			<!-- /.card-body -->
			<div class="card-footer">
				<button type="submit" class="btn btn-primary">Ajouter !</button>
			</div>
		</form>
	</div>
	<!-- /.card -->
	<!-- Form Element sizes -->
	
	<!-- /.card -->
</div>
@endsection