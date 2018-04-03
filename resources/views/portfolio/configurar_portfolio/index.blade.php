@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Portfolio - <a href="/portfolio/configurar_portfolio/create"><button class="btn btn-success">Nuevo</button></a></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre de Página</th>
					<th>Separadores</th>
					<th>Filtro</th>
					<th>Imágen</th>
					<th>Página</th>
				</thead>
               @foreach ($portfolio as $cat)
				<tr>
					<td>{{ $cat->subtitulo}}</td>
					<td>{{ $cat->separadores}}</td>
					<td>{{ $cat->filtro1}} <br>
						{{ $cat->filtro2}} <br>
					    {{ $cat->filtro3}}</td>
					<td><img src="{{asset('img/'.$cat->imagen_portfolio)}}" height="150px" width="150px"> </td>
					<td>{{ $cat->pagina}}</td>
					<td>
						<a href="{{URL::action('PortfolioController@edit',$cat->idportfolio)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$cat->idportfolio}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include ('portfolio.configurar_portfolio.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection