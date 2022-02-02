@extends('layouts.main')
@section('title', 'HDC Eventns')

@section('content')
    <h1>Titulo</h1>
    <h2>Perfil de {{ $nome }}</h2>
    {{-- Comentarios em Blade --}}
    <ul>
        <li>Nome: {{ $nome }}</li>
        <li>Idade: {{ $idade }} anos</li>
        <li>Altura: {{ $altura }}</li>
    </ul>
@endsection
