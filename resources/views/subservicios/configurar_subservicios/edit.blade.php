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

            {!!Form::model($subservicios,['method'=>'PATCH','route'=>['configurar_subservicios.update',$subservicios->idsubservicios]])!!}
            {{Form::token()}}
            <div class="form-group">
                  <label for="subtitulo">Subtítulo</label>
                  <input type="text" name="subtitulo" class="form-control" value="{{$subservicios->subtitulo}}" placeholder="Subtítulo">
            </div>
            <div class="form-group">
                  <label for="subtexto">Subtexto</label>
                  <input type="text" name="subtexto" class="form-control" value="{{$subservicios->subtexto}}" placeholder="Subtexto...">
            </div>
            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}           
            
            </div>
      </div>
@endsection