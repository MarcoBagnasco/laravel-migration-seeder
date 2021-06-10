@extends('layouts.main')

@section('content')
    <section class="home-main container">
            <div class="welcome">
                <h1 class="welcome-title">Welcome</h1>
                {{-- Logo --}}
                <img src="{{ asset('images/air.png') }}" alt="logo">
                {{-- Offers Button --}}
                <a href="{{ route('travels') }}" class="link-button">
                    <div class="button">View Our Offers</div>
                </a>
            </div>
    </section>
@endsection
