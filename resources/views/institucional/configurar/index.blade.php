@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Institucional - <a href="http://localhost:8000/institucional/configurar/create"><button class="btn btn-success">Nuevo</button></a></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Título</th>
					<th>Prezi</th>
				</thead>
               @foreach ($institucional as $cat)
				<tr>
					<td>{{ $cat->titulo}}</td>
					<td>{{ $cat->prezi}}</td>
					<td>
						<a href="{{URL::action('InstitucionalController@edit',$cat->idinstitucional)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$cat->idinstitucional}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include ('institucional.configurar.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection