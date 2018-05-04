@extends ('admin')
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

            {!!Form::model($institucional,['method'=>'PATCH','route'=>['configurar_institucional.update',$institucional->idinstitucional]])!!}
            {{Form::token()}}
            <div class="form-group">
                  <label for="titulo">Título</label>
                  <input type="text" name="titulo" class="form-control" value="{{$institucional->titulo}}" placeholder="Título">
            </div>
            <div class="form-group">
                  <label for="prezi">Prezi</label>
                  <input type="text" name="prezi" class="form-control" value="{{$institucional->prezi}}" placeholder="Dirección del Prezi...">
            </div>
            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

                  {!!Form::close()!!}           
            
            </div>
      </div>
@endsection