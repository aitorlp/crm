@extends('layouts.app')
@section('titulo')
    Roles de usuarios
@endsection
@section('content')

    <div class="container col bg-white p-3 table-hover">
        @include('roles.modal')
        <!-- Botón agregar usuario -->
            <button type="button" class="btn btn-success d-flex ml-auto mb-3" data-toggle="modal" data-target="#addRole">
                Agregar rol de usuario
            </button>

        <!-- Datatable usuarios -->
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
