@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Usuarios - <a href="http://localhost:8000/user/configurar_user/create"><button class="btn btn-success">Nuevo</button></a></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Usuario</th>
					<th>Correo</th>
					<th>Password</th>
				</thead>
               @foreach ($user as $cat)
				<tr>
					<td>{{ $cat->user}}</td>
					<td>{{ $cat->mail}}</td>
					<td>{{ $cat->password}}</td>
					<td>
						<a href="{{URL::action('UserController@edit',$cat->iduser)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$cat->iduser}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include ('user.configurar_user.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection