@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

		{!!Form::open(array('url'=>'http://localhost:8000/user/configurar_user','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="user">Usuario</label>
            	<input type="text" name="user" class="form-control" placeholder="Usuario">
            </div>
            <div class="form-group">
            	<label for="mail">Correo</label>
            	<input type="text" name="mail" class="form-control" placeholder="Correo">
            </div>
            <div class="form-group">
            	<label for="password">Contraseña</label>
            	<input type="text" name="password" class="form-control" placeholder="Contraseña">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

		{!!Form::close()!!}		
		</div>
	</div>
@endsection