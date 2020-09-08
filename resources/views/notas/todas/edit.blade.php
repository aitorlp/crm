@extends('layouts.app')
@section('titulo')
    Editar nota
@endsection
@section('content')
    {!! Form::open(['action' => ['NotasController@update', $nota->id], 'method' => 'PATCH']) !!}
    {{ Form::token() }}
    <div class="card text-center " style="width: 400px;">
        <div class="card-header">
            <input type="text" name="titulo" class="form-control" value="{{ $nota->titulo }}">
        </div>
        <div class="card-body">
            <textarea name="texto" cols="30" class="form-control" rows="6">{{ $nota->texto }}</textarea>
        </div>
        <div class="card-footer text-muted small">
            {{ $nota->update_at }}
            <a href="{{URL::action('NotasController@edit', $nota->id)}}">
                <button type="submit" class="btn btn-sm btn-primary float-right mr-1">
                    Guardar
                </button>
            </a>
            <a href="{{URL::action('NotasController@index')}}">
                <button type="button" class="btn btn-sm btn-danger float-right mr-1">
                    Cancelar
                </button>
            </a>
        </div>
    </div>
    {!! Form::close() !!}

@endsection
