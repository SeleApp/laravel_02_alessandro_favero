@extends('layouts.app')

@section('title', 'Dettaglio film - Grill Master Blog')

@section('content')
    <section class="panel p-8 md:p-12">
        <p class="eyebrow">Scheda film</p>
        <h1 class="section-title mt-2">{{ $movie['title'] }}</h1>
        <p class="mt-2 text-lg font-semibold text-orange-200">Genere: {{ $movie['genre'] }}</p>
        <p class="mt-1 text-sm text-zinc-300">Regista: {{ $movie['director'] }}</p>

        <div class="mt-8 grid gap-6 md:grid-cols-[1.2fr,1fr]">
            <img src="{{ $movie['image'] }}" alt="Locandina di {{ $movie['title'] }}" class="h-full w-full rounded-xl border border-zinc-800 object-cover shadow-2xl shadow-black/30">
            <div class="content-card">
                <h2 class="text-lg font-bold text-orange-300">Perché ci piace</h2>
                <p class="mt-2 text-sm text-zinc-300">Fotografia, ritmo narrativo e atmosfere che ci ispirano a raccontare storie in cucina con la stessa cura.</p>
                <p class="mt-3 text-sm text-zinc-300">Questo film è consigliato per le tue serate grill: prepara la brace, scegli un taglio succoso e goditi la visione.</p>
                <a href="{{ route('movies') }}" class="btn-muted mt-6 inline-flex items-center">← Torna alla lista</a>
            </div>
        </div>
    </section>
@endsection
