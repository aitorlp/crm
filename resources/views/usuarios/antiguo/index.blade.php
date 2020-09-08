@extends('layouts.app')
@section('titulo')
    Usuarios
@endsection
@section('content')
    <div class="container col bg-white p-3 table-hover">
        <!-- Botón agregar usuario -->
        <button type="button" class="btn btn-success d-flex ml-auto mb-3" data-toggle="modal" data-target="#modalAgregar">
            Agregar usuario
        </button>
        @include('usuarios.modal-create')
        @include('usuarios.modal-edit')
        @include('usuarios.modal-delete')

        <!-- Datatable usuarios -->
        <table class="table table-striped data-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Rol de usuario</th>
                    <th width="100px">Acciones</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    @pu

@endsection


