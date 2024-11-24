@extends('base')

@section('csss')
    @vite(['resources/css/header.css', 'resources/css/see_course.css'])
@endsection

@section('header')
    @include('header')
@endsection

@section('content')

@php
    use Illuminate\Support\Facades\Storage;
    $items = $course->items()->get();
@endphp
<div class="container-items">

    @forelse ($items as $item)
        
    
    <div class="container-item">
        {{-- Icon a changer plus tard --}}
        <img src="{{ Storage::disk('public')->url('assets/video.png') }}" alt="" class="item-type">
        <div class="item-info">
            <h3>{{ $item->name }}</h3>
            <p class="description">{{ $item->description }}</p>
        </div>
        <button>
            <img src="{{ Storage::disk('public')->url('assets/download.jpg') }}" alt="">
        </button>
    </div>
    @empty
        Vide
    @endforelse
</div>
<div class="current-media">
    @forelse ($course->items()->get() as $item)
        @php
            $type = $item->getMediaType();
        @endphp

        @if($type === null)
            <x-course.show-item-text :item="$item"/>
        @elseif($type == 'video')
            <x-course.show-item-video :item="$item"/>
        @endif
        <hr>
    @empty
        Aucun 
    @endforelse
</div>
@endsection