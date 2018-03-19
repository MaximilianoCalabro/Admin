@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Slider - <a href="configurar/create"><button class="btn btn-success">Nuevo</button></a></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Imagen</th>
					<th>Título</th>
					<th>Texto</th>
				</thead>
               @foreach ($slider as $cat)
				<tr>
					<td>{{ $cat->imagen_slider}}</td>
					<td>{{ $cat->titulo}}</td>
					<td>{{ $cat->texto}}</td>
					<td>
						<a href=""><button class="btn btn-info">Editar</button></a>
                        <a href=""><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection