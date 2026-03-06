@extends('layouts.app')

@section('title', 'Chi siamo - Grill Master Blog')

@section('content')
    <section class="panel p-8 md:p-12">
        <p class="eyebrow">La nostra identità</p>
        <h1 class="section-title mt-2">Chi siamo</h1>
        <p class="section-copy">Siamo un team di appassionati di BBQ, macellai e food creator. Il nostro obiettivo è condividere contenuti semplici ma tecnici, per aiutarti a cucinare carne alla griglia in modo professionale anche a casa.</p>

        <div class="mt-8 grid gap-4 md:grid-cols-3">
            <div class="metric">
                <p class="metric-value">10+</p>
                <p class="metric-label">Anni di esperienza</p>
            </div>
            <div class="metric">
                <p class="metric-value">500+</p>
                <p class="metric-label">Ore ai fornelli</p>
            </div>
            <div class="metric">
                <p class="metric-value">BBQ</p>
                <p class="metric-label">Metodo pratico</p>
            </div>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-3">
            @foreach ($users as $user)
                <article class="content-card flex flex-col gap-3">
                    <div class="flex items-center justify-between">
                        <p class="eyebrow">Team</p>
                        <span class="rounded-full bg-orange-500/15 px-3 py-1 text-xs text-orange-200">{{ $user['role'] }}</span>
                    </div>
                    <h2 class="text-xl font-bold text-orange-200">{{ $user['name'] }} {{ $user['surname'] }}</h2>
                    <p class="text-sm text-zinc-300">Specialista focale nelle nostre produzioni BBQ e punto di riferimento per la community.</p>
                    <a href="{{ route('about.detail', ['name' => $user['name']]) }}" class="btn-primary mt-auto w-fit">Leggi di più</a>
                </article>
            @endforeach
        </div>
    </section>
@endsection
