<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/chi-siamo', function () {
    $users = [
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

    return view('about', ['users' => $users]);
})->name('about');

Route::get('/chi-siamo/detail/{name}', function (string $name) {
    $users = [
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

    foreach ($users as $user) {
        if ($name === $user['name']) {
            return view('about-detail', ['user' => $user]);
        }
    }

    abort(404);
})->name('about.detail');

Route::get('/contatti', function () {
    return view('contact');
})->name('contact');

Route::get('/movies', function () {
    $movies = [
        [
            'id' => 1,
            'title' => 'Incontri ravvicinati del terzo tipo',
            'director' => 'Steven Spielberg',
            'image' => '/media/poster/spielberg.jpg',
            'genre' => 'Sci-Fi',
        ],
        [
            'id' => 2,
            'title' => '1917',
            'director' => 'Sam Mendes',
            'image' => '/media/poster/1917.jpg',
            'genre' => 'War',
        ],
        [
            'id' => 3,
            'title' => 'Quei bravi ragazzi',
            'director' => 'Martin Scorsese',
            'image' => '/media/poster/scorsese.jpg',
            'genre' => 'Noir',
        ],
        [
            'id' => 4,
            'title' => 'Barbie',
            'director' => 'Greta Gerwig',
            'image' => '/media/poster/barbie.jpeg',
            'genre' => 'Adventure',
        ],
        [
            'id' => 5,
            'title' => 'Lost in Translation',
            'director' => 'Sofia Coppola',
            'image' => '/media/poster/coppola.jpg',
            'genre' => 'Drama',
        ],
    ];

    return view('movies.movies', ['movies' => $movies]);
})->name('movies');

Route::get('/movie/detail/{id}', function (string $id) {
    $movies = [
        [
            'id' => 1,
            'title' => 'Incontri ravvicinati del terzo tipo',
            'director' => 'Steven Spielberg',
            'image' => '/media/poster/spielberg.jpg',
            'genre' => 'Sci-Fi',
        ],
        [
            'id' => 2,
            'title' => '1917',
            'director' => 'Sam Mendes',
            'image' => '/media/poster/1917.jpg',
            'genre' => 'War',
        ],
        [
            'id' => 3,
            'title' => 'Quei bravi ragazzi',
            'director' => 'Martin Scorsese',
            'image' => '/media/poster/scorsese.jpg',
            'genre' => 'Noir',
        ],
        [
            'id' => 4,
            'title' => 'Barbie',
            'director' => 'Greta Gerwig',
            'image' => '/media/poster/barbie.jpeg',
            'genre' => 'Adventure',
        ],
        [
            'id' => 5,
            'title' => 'Lost in Translation',
            'director' => 'Sofia Coppola',
            'image' => '/media/poster/coppola.jpg',
            'genre' => 'Drama',
        ],
    ];

    foreach ($movies as $movie) {
        if ((int) $id === $movie['id']) {
            return view('movies.movie-detail', ['movie' => $movie]);
        }
    }

    abort(404);
})->name('movie.detail');
