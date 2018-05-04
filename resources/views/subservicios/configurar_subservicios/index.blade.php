@extends ('admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Subservicios - <a href="/subservicios/configurar_subservicios/create"><button class="btn btn-success">Nuevo</button></a></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Título</th>
					<th>Texto</th>
				</thead>
               @foreach ($subservicios as $cat)
				<tr>
					<td>{{ $cat->subtitulo}}</td>
					<td>{{ $cat->subtexto}}</td>
					<td>
						<a href="{{URL::action('SubserviciosController@edit',$cat->idsubservicios)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$cat->idsubservicios}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include ('subservicios.configurar_subservicios.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection