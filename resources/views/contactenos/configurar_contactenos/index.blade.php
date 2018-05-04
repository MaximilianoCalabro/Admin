@extends ('admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Contactenos - <!-- <a href="/contactenos/configurar_contactenos/create"><button class="btn btn-success">Nuevo</button></a> --></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Título</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Correo</th>
				</thead>
               @foreach ($contactenos as $cat)
				<tr>
					<td>{{ $cat->titulo}}</td>
					<td>{{ $cat->direccion}}</td>
					<td>{{ $cat->numtel}}</td>
					<td>{{ $cat->correo}}</td>

					<td>
						<a href="{{URL::action('ContactenosController@edit',$cat->idcontactenos)}}"><button class="btn btn-info">Editar</button></a>
                        <!-- <a href="" data-target="#modal-delete-{{$cat->idcontactenos}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> -->
					</td>
				</tr>
				@include ('contactenos.configurar_contactenos.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection