@extends('base')

@section('title', 'Cours')

@section('csss')
    @vite(['resources/css/header.css', 'resources/css/course_item.css'])
@endsection

@section('header')
    @include('header')
@endsection

@section('content')

    <div class="courses-container">
        @forelse ($courses as $course)
            <x-course-item :course="$course"/>
        @empty
            Aucun cours trouvé.
        @endforelse
    </div>
    

@endsection