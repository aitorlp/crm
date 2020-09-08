@extends('layouts.app')
@section('titulo')
    Empresas
@endsection
@section('content')

    <div class="container col bg-white p-3 table-hover">
    @include('empresas.modal.create')
    <!-- Botón agregar empresas -->
        <button type="button" class="btn btn-success d-flex ml-auto mb-3" data-toggle="modal" data-target="#addEmpresa">
            Agregar empresa
        </button>
        <!-- Datatable empresas -->
        <table class="table table-striped data-table">
            <thead>
            <tr>
                <th>Empresa</th>
                <th>Correo electrónico</th>
                <th>Móvil</th>
                <th>Teléfono</th>
                <th>Comentarios</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

    </div>

    @push('scripts')
        <script>
            $(function () {
                var table = $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('empresas.index') }}",
                    columns:[
                        { data:'name', name: 'name', },
                        { data:'email', name: 'email' },
                        { data:'mobile', name: 'mobile' },
                        { data:'phone', name: 'phone' },
                        { data:'comments', name: 'comments' },
                        { data:'action', name: 'action', orderable: false, searchable:false },
                    ],
                    "language":{
                        "sProcessing":     "Procesando...",
                        "sLengthMenu":     "Mostrar _MENU_ registros",
                        "sZeroRecords":    "No se encontraron resultados",
                        "sEmptyTable":     "Ningún dato disponible en esta tabla",
                        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix":    "",
                        "sSearch":         "Buscar:",
                        "sUrl":            "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst":    "Primero",
                            "sLast":     "Último",
                            "sNext":     "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
                        "buttons": {
                            "copy": "Copiar",
                            "colvis": "Visibilidad"
                        }
                    }

                });
            });
        </script>
    @endpush
@endsection


