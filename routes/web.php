<?php

use Illuminate\Support\Facades\Route;

$articles = collect(config('blog.articles'));
$teamMembers = [
    [
        'name' => 'Mario',
        'surname' => 'Rossi',
        'role' => 'Senior Manager',
    ],
    [
        'name' => 'Serena',
        'surname' => 'Verdi',
        'role' => 'HR',
    ],
    [
        'name' => 'Walter',
        'surname' => 'Bianchi',
        'role' => 'Developer',
    ],
];

$movies = [
    [
        'id' => 1,
        'title' => 'Incontri ravvicinati del terzo tipo',
        'director' => 'Steven Spielberg',
        'image' => 'https://images.unsplash.com/photo-1524985069026-dd778a71c7b4?auto=format&fit=crop&w=800&q=80',
        'genre' => 'Sci-Fi',
    ],
    [
        'id' => 2,
        'title' => '1917',
        'director' => 'Sam Mendes',
        'image' => 'https://images.unsplash.com/photo-1478720568477-152d9b164e26?auto=format&fit=crop&w=800&q=80',
        'genre' => 'War',
    ],
    [
        'id' => 3,
        'title' => 'Quei bravi ragazzi',
        'director' => 'Martin Scorsese',
        'image' => 'https://images.unsplash.com/photo-1524985069026-dd778a71c7b4?auto=format&fit=crop&w=800&q=80',
        'genre' => 'Noir',
    ],
    [
        'id' => 4,
        'title' => 'Barbie',
        'director' => 'Greta Gerwig',
        'image' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=800&q=80',
        'genre' => 'Adventure',
    ],
    [
        'id' => 5,
        'title' => 'Lost in Translation',
        'director' => 'Sofia Coppola',
        'image' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?auto=format&fit=crop&w=800&q=80',
        'genre' => 'Drama',
    ],
];

Route::get('/', function () use ($articles) {
    return view('pages.home', [
        'articles' => $articles,
    ]);
})->name('home');

Route::get('/chi-siamo', function () use ($teamMembers) {
    return view('pages.about', [
        'users' => $teamMembers,
    ]);
})->name('about');

Route::get('/chi-siamo/detail/{name}', function (string $name) use ($teamMembers) {
    $user = collect($teamMembers)->firstWhere('name', $name);

    abort_if(! $user, 404);

    return view('pages.about-detail', [
        'user' => $user,
    ]);
})->name('about.detail');

Route::get('/contatti', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/servizi', function () {
    return view('pages.services');
})->name('services');

Route::get('/movies', function () use ($movies) {
    return view('movies.movies', [
        'movies' => $movies,
    ]);
})->name('movies');

Route::get('/movie/detail/{id}', function (int $id) use ($movies) {
    $movie = collect($movies)->firstWhere('id', $id);

    abort_if(! $movie, 404);

    return view('movies.detail', [
        'movie' => $movie,
    ]);
})->name('movie.detail');

Route::get('/articoli/{slug}', function (string $slug) use ($articles) {
    $article = $articles->firstWhere('slug', $slug);

    abort_if(! $article, 404);

    return view('pages.article', [
        'article' => $article,
    ]);
})->where('slug', '[a-z0-9-]+')->name('articles.show');
