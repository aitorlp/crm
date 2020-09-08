<!-- Modal -->
<div class="modal fade" id="modalAgregar" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Agregar usuario</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div id="divmsg" style="display:none" class="alert alert-success" role="alert"></div>

        <!-- Modal body -->
            <div class="modal-body">
                <!-- formulario de registro -->
                <form id="createUserForm" class="userForm" method="post" action="{{ route('usuarios.store') }}">
                    @csrf
                    @include('usuarios.modal-form-user')
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Introducir contraseña">
                    </div>
                    <button type="submit" class="btn btn-success d-flex ml-auto mb-3 btnenviar">Registrar usuario</button>
                </form>
            </div>
        </div>
    </div>
</div>
