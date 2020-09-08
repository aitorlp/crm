@include('usuarios.modal-delete')
<a href="{{ route('usuarios.show', $id)}}" class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></a>
<a href="{{ route('usuarios.edit', $id)}}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
<button type="button" class="btn btn-sm btn-danger" id="#delete-{{$id}}" data-toggle="modal">
    <i class="fas fa-trash-alt"></i>
</button>
