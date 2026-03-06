@extends('layouts.app')

@section('title', 'Film - Grill Master Blog')

@section('content')
    <section class="panel p-8 md:p-12">
        <p class="eyebrow">Selezione film</p>
        <h1 class="section-title mt-2">I nostri film preferiti</h1>
        <p class="section-copy">Una raccolta di titoli che ci ispirano per fotografia, ritmo narrativo e colonna sonora. Ogni card porta al dettaglio con trama e crediti principali.</p>

        <div class="mt-10 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($movies as $movie)
                <article class="card-lift overflow-hidden">
                    <img src="{{ $movie['image'] }}" alt="Locandina di {{ $movie['title'] }}" class="h-52 w-full object-cover">
                    <div class="p-5">
                        <p class="eyebrow">{{ $movie['genre'] }}</p>
                        <h2 class="mt-2 text-xl font-bold text-orange-200">{{ $movie['title'] }}</h2>
                        <p class="mt-1 text-sm text-zinc-300">Regista: {{ $movie['director'] }}</p>
                        <a href="{{ route('movie.detail', ['id' => $movie['id']]) }}" class="btn-primary mt-4">Leggi di più</a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection
