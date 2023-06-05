@extends('layouts.layout')
@section('content')
{{-- @include('includes._home') --}}
<article id="home" class="panel intro">
    <header>
        <h1>GinTonicTK</h1>
        <p>Video library management system</p>
    </header>
    @guest
    <a href="{{ route('login') }}" class="jumplink pic">
        <span class="arrow icon solid fa-chevron-right"><span>Login</span></span>
        <img src="{{ Vite::asset('resources/images/me.jpg') }}" alt="logo" />
    </a>

    @else
    <a href="{{ 'logout' }}" class="jumplink pic">
        <span class="arrow icon solid fa-chevron-left"><span>Logout</span></span>
        <img src="{{ Vite::asset('resources/images/me.jpg') }}" alt="logo" />
    </a>
    @endguest

</article>
@endsection
