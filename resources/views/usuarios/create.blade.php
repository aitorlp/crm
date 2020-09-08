@extends('layouts.app')
@section('titulo')
    Registro de usuarios
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
            <form action="/usuarios" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" placeholder="Nombre">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="last_name">Apellidos</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Apellidos">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" placeholder="Correo electrónico">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password_confirmation">Confirme contraseña</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="rol">Rol de usuario</label>
                        <select name="rol" class="form-control">
                            <option selected disabled>Elige un rol para este usuario...</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Imagen</label>
                        <input type="file" class="form-control-file" name="imagen">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrar usuario</button>
                <a href="{{url('usuarios')}}" class="btn btn-danger">Cancelar registro</a>
            </form>

@endsection
