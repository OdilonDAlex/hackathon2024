@extends('base')

@section('title', 'HOME')

@section('content')

    @auth
        Bienvenue {{ Auth::user()->name . ' ' . Auth::user()->firstname }}
        <form action="{{ route('logout') }}" method="POST">
            @method('DELETE')
            @csrf
            
            <button type="submit">Se deconnecter</button>
        </form>
    @endauth

    @guest
        Inscrivez-vous <a href="{{ route('register') }}">S'inscrire</a>
    @endguest

@endsection
