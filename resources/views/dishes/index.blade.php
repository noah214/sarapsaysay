@extends('layouts.app')

@section('title', 'For You - SarapSaysay')

@section('content')
<div class="container">

    <h2 class="mb-1">For You</h2>
    <p class="text-muted mb-4">Dishes picked from your saved flavors and regions.</p>

    <div class="row g-4">
        @foreach ($dishes as $dish)
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
                <img src="{{ $dish['image'] }}" class="card-img-top" alt="{{ $dish['name'] }}" style="height:150px; object-fit:cover;">
                <div class="card-body">
                    <span class="badge badge-brand mb-2">{{ $dish['category'] }}</span>
                    <h5 class="card-title mb-1">{{ $dish['name'] }}</h5>
                    <p class="text-muted small mb-2">{{ $dish['region'] }}</p>
                    <span class="text-warning">
                        @for ($i = 0; $i < 5; $i++)
                            {{ $i < round($dish['rating']) ? '★' : '☆' }}
                        @endfor
                    </span>
                    <span class="small text-muted">{{ $dish['rating'] }}</span>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="{{ url('/dishes/'.$dish['id']) }}" class="btn btn-outline-success btn-sm w-100">View dish</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
