<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                <a class="nav-link" href="{{ route('movies') }}">Film</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="display-5 fw-bold">Benvenuto su Moviemania</h1>
                <p class="lead mt-3">Scopri il nostro team, contattaci per collaborazioni e sfoglia la lista dei film che amiamo di piu.</p>
                <div class="d-flex gap-3 justify-content-center mt-4">
                    <a href="{{ route('about') }}" class="btn btn-dark">Chi siamo</a>
                    <a href="{{ route('movies') }}" class="btn btn-outline-dark">Vai ai film</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
