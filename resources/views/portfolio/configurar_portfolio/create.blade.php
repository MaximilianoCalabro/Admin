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

		{!!Form::open(array('url'=>'/portfolio/configurar_portfolio','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
            <div class="form-group">
                  <label for="subtitulo">Nombre de Página</label>
                  <input type="text" name="subtitulo" class="form-control" placeholder="Nombre de Página">
            </div>
            <div class="form-group">
            	<label for="separadores">Separadores</label>
            	<input type="text" name="separadores" class="form-control" placeholder="Separadores">
            </div>
            <div class="form-group">
                  <label for="filtro1">Filtro 1</label>
                  <br>
                  <select name="filtro1">
                        <option value="filter-dp">Diseño y Programación Web</option> 
                        <option value="filter-h">Hosting</option>
                        <option value="filter-cm">Community Manager</option>
                  </select>
            </div>
            <div class="form-group">
                  <label for="filtro2">Filtro 2</label>
                  <br>
                  <select name="filtro2">
                        <option value="-">------------</option> 
                        <option value="filter-dp">Diseño y Programación Web</option> 
                        <option value="filter-h">Hosting</option>
                        <option value="filter-cm">Community Manager</option>
                  </select>
            </div>
            <div class="form-group">
                  <label for="filtro3">Filtro 3</label>
                  <br>
                  <select name="filtro3">
                        <option value="-">------------</option> 
                        <option value="filter-dp">Diseño y Programación Web</option> 
                        <option value="filter-h">Hosting</option>
                        <option value="filter-cm">Community Manager</option>
                  </select>
            </div>
            <div class="form-group">
            	<label for="pagina">Dirección de Página</label>
            	<input type="url" name="pagina" class="form-control" placeholder="Dirección de Página...">
            </div>
            <div class="form-group">
                  <label for="imagen_portfolio">Imágen</label>
                  <input type="file" name="imagen_portfolio" class="form-control">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
		{!!Form::close()!!}		
            
		</div>
	</div>
@endsection