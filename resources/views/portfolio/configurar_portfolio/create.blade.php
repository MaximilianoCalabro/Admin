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

			{!!Form::open(array('url'=>'http://localhost:8000/portfolio/configurar_portfolio','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="titulo">Título</label>
            	<input type="text" name="titulo" class="form-control" placeholder="Título">
            </div>
            <div class="form-group">
            	<label for="separadores">Separadores</label>
            	<input type="text" name="separadores" class="form-control" placeholder="Separadores">
            </div>
            <div class="form-group">
            	<label for="imagen_portfolio">Imágen</label>
            	<input type="file" name="Imagen" accept="image/*" class="form-control" placeholder="Imágen..."> <!-- AUNQUE SEA INSERTADO "FALTA" -->
            </div>
            <div class="form-group">
            	<label for="subtitulo">Subtitulo</label>
            	<input type="text" name="subtitulo" class="form-control" placeholder="Subtitulo">
            </div>
            <div class="form-group">
            	<label for="pagina">Dirección de Página</label>
            	<input type="url" name="pagina" class="form-control" placeholder="Dirección de Página...">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection