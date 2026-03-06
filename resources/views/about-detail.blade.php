<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettaglio Team</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">Moviemania</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link active" aria-current="page" href="/chi-siamo">Chi siamo</a>
                <a class="nav-link" href="/contatti">Contatti</a>
                <a class="nav-link" href="/movies">Film</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1 class="fw-bold">{{ $user['name'] }} {{ $user['surname'] }}</h1>
                <p class="lead text-muted">{{ $user['role'] }}</p>
                <p class="mt-4">Questa e la pagina dedicata al membro del team selezionato. Qui potresti aggiungere biografia, competenze o curiosita.</p>
                <a href="{{ route('about') }}" class="btn btn-outline-dark mt-3">← Torna al team</a>
            </div>
        </div>
    </div>
</body>
</html>
