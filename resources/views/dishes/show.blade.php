@extends('layouts.app')

@section('title', $dish['name'].' - SarapSaysay')

@section('content')
<div class="container">

    <img src="{{ $dish['image'] }}" class="w-100 rounded mb-3" style="height:280px; object-fit:cover;" alt="{{ $dish['name'] }}">

    <span class="badge badge-brand mb-2">{{ $dish['category'] }}</span>
    <span class="badge bg-light text-dark mb-2">{{ $dish['flavor'] }}</span>

    <h1 class="mb-0">{{ $dish['name'] }}</h1>
    <p class="text-muted">{{ $dish['alt_name'] }}</p>

    <div class="mb-3">
        <span class="text-warning">
            @for ($i = 0; $i < 5; $i++)
                {{ $i < round($dish['rating']) ? '★' : '☆' }}
            @endfor
        </span>
        <strong>{{ $dish['rating'] }}</strong>
        <span class="text-muted">({{ $dish['review_count'] }} community ratings)</span>
    </div>

    <div class="mb-4">
        <button class="btn btn-brand me-2">Write a Review</button>
        <button class="btn btn-outline-success me-2">✓ Tried</button>
        <button class="btn btn-outline-secondary">♥ Saved</button>
    </div>

    <p>{{ $dish['description'] }}</p>

    <div class="alert" style="background-color:#eef5ee;">
        <strong class="text-uppercase small">Cultural context</strong>
        <p class="fst-italic mb-0">{{ $dish['cultural_note'] }}</p>
    </div>

    <h4 class="mt-4">Variations</h4>
    <p class="text-muted small">Select a variation to highlight it in your review.</p>

    <div class="list-group mb-4">
        @foreach ($dish['variations'] as $variation)
        <div class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <strong>{{ $variation['name'] }}</strong>
                <span class="badge badge-brand">{{ $variation['tag'] }}</span>
                <div class="text-muted small">{{ $variation['note'] }}</div>
            </div>
            <span class="text-warning">★ {{ $variation['rating'] }}</span>
        </div>
        @endforeach
    </div>

    <h4>Community Reviews</h4>
    @foreach ($dish['reviews'] as $review)
    <div class="border-bottom py-3">
        <div class="d-flex justify-content-between">
            <strong>{{ $review['author'] }}</strong>
            <span class="text-warning">★ {{ $review['stars'] }}</span>
        </div>
        <div class="text-muted small mb-1">{{ $review['date'] }} — {{ $review['variation'] }}</div>
        <p class="mb-0">{{ $review['text'] }}</p>
    </div>
    @endforeach

</div>
@endsection
