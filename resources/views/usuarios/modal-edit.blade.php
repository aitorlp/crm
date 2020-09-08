<!-- Modal -->
<div class="modal fade" id="modalEditar" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Editar usuario</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <form class="usersForm" method="PUT" action="{{ route('usuarios.edit', $id ?? '') }}">
                @csrf
                <div class="modal-body">
                    <!-- formulario de registro -->

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
