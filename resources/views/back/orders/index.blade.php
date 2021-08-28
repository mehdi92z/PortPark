@extends('back.layout')
@section('content')

<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>CLients</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{route('home')}}">Accueil</a></li>
					<li class="breadcrumb-item active">Factures</li>
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
							<h3 class="card-title">Liste des Facture</h3>
						</div>
						
					</div>
				</div>
				
				<div class="card-body">
					<table id="example1" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Nom client  et bateau</th>
                                <th>typd bateau</th>
                                <th>longueur</th>
                                <th>tarifs</th>
                                <th>action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($orders as $order)
							<tr>
								<td>{{$order->nom_client}} {{$order->nom_bateau}}</td>
                                <td>{{$order->type_bateau}}</td>
                                <td>{{$order->longueur_bateau}}</td>
                                <td> {{$order->tarifs}}</td>
                                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>

                        <div class="dropdown-menu" role="menu" style="">
                            <a class="dropdown-item " href="{{route('order/facture',['id'=>$order->id])}}">facture</a>
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
