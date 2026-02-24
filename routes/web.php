<?php

use Illuminate\Support\Facades\Route;

$articles = collect(config('blog.articles'));

Route::get('/', function () use ($articles) {
    return view('pages.home', [
        'articles' => $articles,
    ]);
})->name('home');

Route::get('/chi-siamo', function () {
    return view('pages.about');
})->name('about');

Route::get('/servizi', function () {
    return view('pages.services');
})->name('services');

Route::get('/articoli/{slug}', function (string $slug) use ($articles) {
    $article = $articles->firstWhere('slug', $slug);

    abort_if(! $article, 404);

    return view('pages.article', [
        'article' => $article,
    ]);
})->where('slug', '[a-z0-9-]+')->name('articles.show');
