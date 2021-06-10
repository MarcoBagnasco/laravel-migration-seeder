@extends('layouts.main')

@section('content')
    <section class="travels-main container">
        <!-- Navigation -->
        <div>
            {{ $travels->links() }}
        </div>
        
        <!-- Cards -->
        <div class="cards-wrapper">
            @foreach ($travels as $travel)
                <div class="card">
                    <h2>{{ $travel->main_location }}</h2>
                    <h2 class="price">€ {{ number_format($travel->price, 2, ',', '.') }}</h2>
                    <ul>
                        <li><strong>Duration:</strong> {{ $travel->duration }}</li>
                        <li><strong>Departure:</strong> {{ $travel->departure }}</li>
                        <li><strong>Itinerary:</strong> {{ $travel->itinerary }}</li>
                    </ul>
                </div>
            @endforeach
        </div>

        <!-- Home Button -->
        <a href="{{ route('home') }}" class='link-button'>
            <div class="button">Back to Home</div>
        </a>
    </section>
@endsection