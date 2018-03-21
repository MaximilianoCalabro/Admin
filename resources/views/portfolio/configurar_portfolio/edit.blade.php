@extends ('layouts.admin')
@section ('contenido')
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                  <ul>
                  @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                  @endforeach
                  </ul>
            </div>
            @endif

            {!!Form::model($portfolio,['method'=>'PATCH','route'=>['configurar_portfolio.update',$portfolio->idportfolio]])!!}
            {{Form::token()}}
            <div class="form-group">
                  <label for="titulo">Título</label>
                  <input type="text" name="Titulo" class="form-control" value="{{$portfolio->titulo}}" placeholder="Título">
            </div>
            <div class="form-group">
                  <label for="separadores">Separadores</label>
                  <input type="text" name="Separadores" class="form-control" value="{{$portfolio->separadores}}" placeholder="Separadores">
            </div>
            <div class="form-group">
                  <label for="imagen_portfolio">Imágen</label>
                  <input type="text" name="Imagen" class="form-control" value="{{$portfolio->imagen_portfolio}}" placeholder="Imágen">
            </div>
            <div class="form-group">
                  <label for="subtitulo">Subítulo</label>
                  <input type="text" name="Subtitulo" class="form-control" value="{{$portfolio->subtitulo}}" placeholder="Subtítulo">
            </div>
            <div class="form-group">
                  <label for="pagina">Dirección de Página</label>
                  <input type="url" name="pagina" class="form-control" value="{{$portfolio->pagina}}" placeholder="Dirección de Página">
            </div>

            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

                  {!!Form::close()!!}           
            
            </div>
      </div>
@endsection