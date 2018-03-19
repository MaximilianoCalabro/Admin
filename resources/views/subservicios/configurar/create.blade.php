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

		{!!Form::open(array('url'=>'http://localhost:8000/subservicios/configurar','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="subtitulo">Título</label>
            	<input type="text" name="subtitulo" class="form-control" placeholder="Título">
            </div>
            <div class="form-group">
            	<label for="subtexto">Texto</label>
            	<input type="text" name="subtexto" class="form-control" placeholder="Texto...">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

		{!!Form::close()!!}		
		</div>
	</div>
@endsection