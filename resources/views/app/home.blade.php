@extends('layouts.app')

@section('content')
    <div class="welcome">
        <div class="logo">
            <img src="/img/logo.png" alt="Pictorio">
        </div>

        @include('app.components.errors')

        <div class="card">
            @auth
                @include('app.components.welcome.auth')
            @else
                @include('app.components.welcome.guest')
            @endauth
        </div>
    </div>
@endsection
