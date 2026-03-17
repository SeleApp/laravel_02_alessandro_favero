<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettaglio Film</title>
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
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center">
                <img src="{{ $movie['image'] }}" alt="Poster di {{ $movie['title'] }}" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h1 class="fw-bold">{{ $movie['title'] }}</h1>
                <p class="lead text-muted">Genere: {{ $movie['genre'] }}</p>
                <p class="mb-4">Regista: {{ $movie['director'] }}</p>
                <p>Questa scheda mostra il dettaglio del film selezionato. Qui puoi aggiungere trama, curiosita o note di produzione.</p>
                <a href="{{ route('movies') }}" class="btn btn-outline-dark mt-3">← Torna alla lista</a>
            </div>
        </div>
    </div>
</body>
</html>
