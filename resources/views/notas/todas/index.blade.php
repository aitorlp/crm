@extends('layouts.app')
@section('titulo')
    Todas las notas
@endsection
@section('content')

    <div class="float-left p-3">
            @include('notas.todas.modal')
    </div>
    <div class="d-flex flex-wrap justify-content-around">
    @foreach($notas as $nota)

        @include('notas.todas.modal-delete')

        <div class="card border-primary mb-3" style="max-width: 18rem; min-width: 18rem;">
            <div class="card-header">{{ $nota->titulo }}
                <p class="small float-right">{{ $nota->created_at }}</p>
            </div>
            <div class="card-body text-primary">
                <p class="card-text">{{ $nota->texto }}</p>
            </div>
            <div class="card-footer">
                    <button type="button" class="btn btn-sm btn-danger float-right" data-toggle="modal" data-target="#modalEliminar-{{$nota->id}}">
                        <i class="fas fa-trash-alt"></i>
                    </button>

                <a href="{{URL::action('NotasController@edit', $nota->id)}}">
                    <button type="button" class="btn btn-sm btn-primary float-right mr-1">
                        <i class="fas fa-edit"></i>
                    </button>
                </a>
            </div>
        </div>

    @endforeach
</div>
@endsection
