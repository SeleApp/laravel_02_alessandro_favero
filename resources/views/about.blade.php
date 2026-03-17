<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi siamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Moviemania</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link active" aria-current="page" href="{{ route('about') }}">Chi siamo</a>
                <a class="nav-link" href="{{ route('contact') }}">Contatti</a>
                <a class="nav-link" href="{{ route('movies') }}">Film</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row mb-4">
            <div class="col text-center">
                <h1 class="fw-bold">Il nostro team</h1>
                <p class="text-muted">Scopri chi lavora dietro le quinte di Moviemania.</p>
            </div>
        </div>

        <div class="row g-4">
            @foreach($users as $user)
                <div class="col-12 col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $user['name'] }} {{ $user['surname'] }}</h5>
                            <p class="card-text text-muted">{{ $user['role'] }}</p>
                            <a href="{{ route('about.detail', ['name' => $user['name']]) }}" class="btn btn-dark">Leggi di più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
