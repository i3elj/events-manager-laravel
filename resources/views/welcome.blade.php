@extends('layouts.main')
@section('title', 'HDC Eventns')

@section('content')

@foreach ($events as $event)
    <p>{{ $event->title }} -- {{ $event->description }}</p>
@endforeach
@endsection
