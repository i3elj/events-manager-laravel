@extends('layouts.main')
@section('title', 'Produto')

@section('content')

@if ($id == null)
    <p>404 Not Found</p>
@else
    <h1>Produto id: {{ $id }}</h1>
@endif

@endsection
