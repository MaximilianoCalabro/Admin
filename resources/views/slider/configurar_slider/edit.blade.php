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

            {!!Form::model($slider,['method'=>'PATCH','route'=>['configurar_slider.update', $slider->idslider],'files'=>'true'])!!}
            {{Form::token()}}
            <div class="form-group">
                  <label for="titulo">Título</label>
                  <input type="text" name="titulo" class="form-control" value="{{$slider->titulo}}" placeholder="Título">
            </div>
            <div class="form-group">
                  <label for="texto">Texto</label>
                  <input type="text" name="texto" class="form-control" value="{{$slider->texto}}" placeholder="Texto...">
            </div>
            <div class="form-group">
                  <label for="imagen_slider">Imágen</label>
                  <input type="file" name="imagen_slider" class="form-control" value="{{$slider->imagen_slider}}">
                  @if (($slider->imagen_slider)!='')
                        <img src="{{asset('img/'.$slider->imagen_slider)}}" height="150px" width="150px">
                  @endif
            </div>
            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}           
            
            </div>
      </div>
@endsection