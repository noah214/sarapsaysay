<?php

use Illuminate\Support\Facades\Route;

// --- Auth page ---
Route::view('/login', 'auth.login');

// --- For You feed (home page) ---
Route::get('/', function () {
    $dishes = [
        ['id' => 1, 'name' => 'Sinigang', 'region' => 'Tagalog · Ilocano', 'category' => 'Soup', 'rating' => 4.7, 'image' => 'https://placehold.co/400x200'],
        ['id' => 2, 'name' => 'Adobo', 'region' => 'Nationwide', 'category' => 'Braised', 'rating' => 4.9, 'image' => 'https://placehold.co/400x200'],
        ['id' => 3, 'name' => 'Kare-Kare', 'region' => 'Kapampangan', 'category' => 'Stew', 'rating' => 4.5, 'image' => 'https://placehold.co/400x200'],
        ['id' => 4, 'name' => 'Bicol Express', 'region' => 'Bicolano', 'category' => 'Spicy', 'rating' => 4.6, 'image' => 'https://placehold.co/400x200'],
    ];

    return view('dishes.index', compact('dishes'));
});

// --- Dish profile page ---
Route::get('/dishes/{id}', function ($id) {
    $dish = [
        'name' => 'Sinigang',
        'alt_name' => 'Sinigang na Baboy',
        'category' => 'Soup',
        'flavor' => 'Sour',
        'rating' => 4.7,
        'review_count' => 241,
        'image' => 'https://placehold.co/800x300',
        'description' => 'A tamarind-soured broth with vegetables and your protein of choice. One of the most universally loved dishes in Philippine households.',
        'cultural_note' => 'Sinigang predates Spanish colonization and appears in records as early as the 16th century. The souring agent varies by region.',
        'variations' => [
            ['name' => 'Sinigang na Baboy', 'tag' => 'Tagalog', 'note' => 'Pork ribs or belly, the classic', 'rating' => 4.7],
            ['name' => 'Sinigang na Hipon', 'tag' => 'Coastal Luzon', 'note' => 'Shrimp, lighter and brighter', 'rating' => 4.5],
            ['name' => 'Sinigang na Isda', 'tag' => 'Ilocano', 'note' => 'Bangus or tilapia, common in coastal towns', 'rating' => 4.3],
        ],
        'reviews' => [
            ['author' => 'Maria Santos', 'stars' => 5, 'date' => 'Aug 12, 2026', 'variation' => 'Sinigang na Baboy', 'text' => 'Nothing comes close on a rainy afternoon.'],
            ['author' => 'Rodrigo Dela Cruz', 'stars' => 4, 'date' => 'Jul 26, 2026', 'variation' => 'Sinigang na Hipon', 'text' => 'The shrimp version is underrated.'],
        ],
    ];

    return view('dishes.show', compact('dish'));
});
