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

            {!!Form::model($user,['method'=>'PATCH','route'=>['usuario.update',$user->iduser]])!!}
            {{Form::token()}}
            <div class="form-group">
                  <label for="user">Usuario</label>
                  <input type="text" name="Usuario" class="form-control" value="{{$user->user}}" placeholder="Usuario">
            </div>
            <div class="form-group">
                  <label for="mail">Correo</label>
                  <input type="text" name="Correo" class="form-control" value="{{$user->mail}}" placeholder="Correo">
            </div>
            <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="text" name="Contraseña" class="form-control" value="{{$user->password}}" placeholder="Contraseña">
            </div>
            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}           
            
            </div>
      </div>
@endsection