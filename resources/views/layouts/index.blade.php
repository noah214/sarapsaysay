@extends('layouts.app')

@section('title', 'For You - SarapSaysay')

@section('content')

<!-- Hero banner -->
<div class="hero-banner mb-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="eyebrow mb-2">Featured Culinary Meal</div>
                <h1 class="brand-font mb-3">{{ $featured['name'] }}</h1>
                <p class="mb-4" style="color:#d5e5da;">{{ $featured['description'] }}</p>
                <a href="{{ url('/dishes/'.$featured['id']) }}" class="btn btn-success me-2">Explore Meal</a>
                <a href="#" class="btn btn-outline-light">View Passport</a>
            </div>
            <div class="col-md-5">
                <img src="{{ $featured['image'] }}" class="w-100" style="height:220px; object-fit:cover;" alt="{{ $featured['name'] }}">
            </div>
        </div>
    </div>
</div>

<div class="container">

    @foreach ($sections as $section)
    <div class="mb-5">
        <div class="d-flex justify-content-between align-items-baseline mb-3">
            <div>
                <h3 class="brand-font mb-0 d-inline">{{ $section['title'] }}</h3>
                @if(!empty($section['subtitle']))
                    <span class="text-muted small ms-2">{{ $section['subtitle'] }}</span>
                @endif
            </div>
            @if(!empty($section['action']))
                <a href="#" class="btn btn-outline-secondary btn-sm">{{ $section['action'] }}</a>
            @endif
        </div>

        <div class="d-flex overflow-auto dish-row pb-2">
            @foreach ($section['dishes'] as $dish)
            <div class="dish-card">
                <div class="position-relative">
                    <img src="{{ $dish['image'] }}" alt="{{ $dish['name'] }}">
                    <span class="badge category-tag">{{ $dish['category'] }}</span>
                    @if($dish['tried'])
                        <span class="badge bg-light text-dark status-tag" style="top:8px;">Tried</span>
                    @endif
                    @if($dish['saved'])
                        <span class="badge bg-white text-dark border status-tag" style="top: {{ $dish['tried'] ? '36px' : '8px' }};">Saved</span>
                    @endif
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1">{{ $dish['name'] }}</h6>
                        <span class="small text-nowrap"><span class="text-warning">★</span> {{ $dish['rating'] }}</span>
                    </div>
                    <p class="blurb text-muted small mb-2">{{ $dish['blurb'] }}</p>
                    <span class="badge bg-light text-dark border">{{ $dish['variation_count'] }} variations</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach

</div>
@endsection
