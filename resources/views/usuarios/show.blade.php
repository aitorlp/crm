@extends('layouts.app')
@section('titulo')
    Usuario {{ $user->name }} {{ $user->last_name }}
@endsection
@section('content')
    <div class="jumbotron jumbotron-fluid">
            <h1 class="display-4">{{ $user->name }} {{ $user->last_name }}</h1>
            <p class="lead">{{ $user->email }}</p>
    </div>

@endsection
