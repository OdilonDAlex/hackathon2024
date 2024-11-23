@extends('base')

@section('title', 'Création de contenu')


@vite(['resources/css/header.css', 'resources/css/create.css', 'resources/css/course-item.css', 'resources/js/app.js'])


@section('body')
    @include('popup.course.create')
    @if($selectedCourse !== null)
        @include('popup.course.create-item',  ['course_id' => $selectedCourse->id])
    @endif
@endsection

@section('header')
    @include('header')
@endsection

@section('content')

    @include('course.aside')
    <div class="main-content">
        @if($selectedCourse !== null)
        
            <div class="survey-details">
                <h5 class="survey-title">
                    {{ $selectedCourse->title }}
                </h5>
                <p class="survey-description">
                    {{ $selectedCourse->description }}
                </p>
            </div>
            <div class="survey-items-container">

                @forelse($selectedCourseItems as $item)
                    {{-- <x-survey.creation.survey-item :survey-item="$item" :number="$loop->index"/> --}}
                        <x-creation.course-item :course-item="$item"/>
                @empty
                @endforelse
                <button class="create-survey-item">
                    @include('svg.new')
                    nouveau contenu chapitre ?
                </button>
            </div>

            <form action="{{ route('course.publish') }}" method="POST">
                @csrf
                @method('PATCH')

                <input type="hidden" name="courseId" value="{{ $selectedCourse->id }}">
                <button class="publish-survey-button" type="submit">Publier</button>
            </form>
        @else
            <p class="no-survey-yet">Cliquer sur le boutton sur la section a gauche pour commencer a structurer le contenu que vous voulez partagez</p>
        @endif
    </div>
@endsection