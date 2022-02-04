@extends('layouts.main')
@section('title', 'HDC Events - Produtos')

@section('content')
<h1>Pagina de Produtos</h1>

@if ($busca != null)
    <p>O usuario pesquisou por {{ $busca }}</p>
@endif
@endsection
