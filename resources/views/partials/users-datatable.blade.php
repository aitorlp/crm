@foreach($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->last_name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role}}</td>
        <td>
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                    data-target="#modalEliminar"><i class="fas fa-trash"></i></button>
            &nbsp;
            <button type="button" class="btn btn-primary btn-sm edit-user-button" data-toggle="modal"
                    data-target="#modalEditar"><i class="fas fa-edit"></i></button>
        </td>
    </tr>
@endforeach
