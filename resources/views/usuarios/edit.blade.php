@extends('layouts.app')
@section('titulo')
    Editar usuario: {{$user->name }}
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>
            <form action="{{ route('usuarios.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="last_name">Apellidos</label>
                        <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="password">Contraseña <span class="small">(Opcional)</span> </label>
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password_confirmation">Confirme contraseña <span class="small">(Opcional)</span></label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="rol">Rol de usuario</label>
                        <select name="rol" class="form-control">
                            <option selected disabled>Elige un rol para este usuario...</option>
                            @foreach($roles as $role)
                                @if($role->name == str_replace(array('["', '"]'), '', $user->tieneRol()))
                                        <option value="{{ $role->id }}" selected>{{$role->name}}</option>
                                    @else
                                        <option value="{{ $role->id }}">{{$role->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="imagen">Imagen</label>
                        <input type="file" class="form-control-file" name="imagen">
                        <br>
                    </div>
                    <div class="form-group col-md-3">
                        @if($user->imagen != "")
                            <img src="{{ asset('imagenes/' .$user->imagen) }}"  class="img-circle" id="imagen" height="100px" width="100px">
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar usuario</button>
                <a href="/usuarios" class="btn btn-danger">Cancelar registro</a>

            </form>

@endsection
