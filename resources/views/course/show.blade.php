@extends('base')

@section('csss')
    @vite(['resources/css/header.css', 'resources/css/show.css'])
@endsection

@section('header')
    @include('header')
@endsection

@section('content')
<small class="breadscrumb">
    cours > {{ $course->title }}
</small>
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>

    @forelse ($course->items()->get() as $item)
        <p>{{ $item->name }}</p>
    @empty
        Aucun 
    @endforelse
@endsection