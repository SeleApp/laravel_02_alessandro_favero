<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Moviemania</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('about') }}">Chi siamo</a>
                <a class="nav-link" href="{{ route('contact') }}">Contatti</a>
                <a class="nav-link active" aria-current="page" href="{{ route('movies') }}">Film</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row mb-4">
            <div class="col text-center">
                <h1 class="fw-bold">Tutti i nostri film</h1>
                <p class="text-muted">Ogni card porta alla scheda di dettaglio.</p>
            </div>
        </div>

        <div class="row g-4">
            @foreach($movies as $movie)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $movie['image'] }}" class="card-img-top" alt="Poster di {{ $movie['title'] }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $movie['title'] }}</h5>
                            <p class="card-text text-muted mb-1">{{ $movie['genre'] }}</p>
                            <p class="card-text small text-muted">Regista: {{ $movie['director'] }}</p>
                            <a href="{{ route('movie.detail', ['id' => $movie['id']]) }}" class="btn btn-dark mt-2">Leggi di più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
