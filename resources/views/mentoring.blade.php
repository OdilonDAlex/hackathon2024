@extends('base')

@section('csss')
    @vite(['resources/css/header.css', 'resources/css/mentoring.css'])
@endsection

@section('header')
    @include('header')
@endsection

@section('content')
    <x-input label="Age" type="number" name="age" id="age"/>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
@endsection