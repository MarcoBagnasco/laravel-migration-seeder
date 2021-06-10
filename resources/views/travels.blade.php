@extends('layouts.main')

@section('content')
    <section class="travels">
        <h1>OFFERS</h1>
        @foreach ($travels as $travel)
        <div class="card">
            <h3>{{ $travel->main_location }}</h3>
            <h4>€ {{ number_format($travel->price, 2, ',', '.') }}</h4>
            <ul>
                <li>Duration: {{ $travel->duration }}</li>
                <li>Departure: {{ $travel->departure }}</li>
                <li>Itinerary: {{ $travel->itinerary }}</li>
            </ul>
        </div>
        @endforeach

        <div>
            {{ $travels->links() }}
        </div>
        <a href="{{ route('home') }}">Back to Home</a>
    </section>
@endsection