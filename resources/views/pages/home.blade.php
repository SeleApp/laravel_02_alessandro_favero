@extends('layouts.app')

@section('title', 'Homepage - Grill Master Blog')

@section('content')
    <section class="panel mb-12 grid gap-8 p-8 md:grid-cols-2 md:items-center md:p-12">
        <div>
            <span class="kicker">🔥 Blog carne alla griglia</span>
            <h1 class="mt-5 text-4xl font-black leading-tight md:text-6xl">Porta la tua grigliata a un livello davvero professionale.</h1>
            <p class="mt-4 max-w-xl text-zinc-300">Tecniche pratiche, consigli sui tagli e ricette testate sul campo per ottenere cotture perfette, crosta intensa e carne succosa ogni volta.</p>
            <div class="mt-7 flex flex-wrap gap-3">
                <a href="#articoli" class="btn-primary">Esplora gli articoli</a>
                <a href="{{ route('services') }}" class="btn-muted">Scopri i servizi</a>
            </div>
        </div>

        <div class="relative">
            <img src="{{ $articles->first()['image'] }}" alt="{{ $articles->first()['title'] }}" class="h-[340px] w-full rounded-2xl border border-zinc-700/70 object-cover shadow-2xl shadow-black/30 md:h-[420px]">
            <div class="pointer-events-none absolute inset-0 rounded-2xl bg-gradient-to-t from-zinc-950/50 via-transparent"></div>
            <div class="absolute bottom-4 left-4 right-4 rounded-xl border border-zinc-700/80 bg-zinc-950/70 p-4 backdrop-blur">
                <p class="eyebrow">In evidenza</p>
                <h3 class="mt-1 text-lg font-bold">{{ $articles->first()['title'] }}</h3>
            </div>
        </div>
    </section>

    <section class="mb-12 grid gap-4 md:grid-cols-3">
        <div class="metric">
            <p class="metric-value">10+</p>
            <p class="metric-label">Guide BBQ</p>
        </div>
        <div class="metric">
            <p class="metric-value">100%</p>
            <p class="metric-label">Passione Griglia</p>
        </div>
        <div class="metric">
            <p class="metric-value">Pro</p>
            <p class="metric-label">Approccio Tecnico</p>
        </div>
    </section>

    <section id="articoli">
        <div class="mb-6 flex items-end justify-between gap-4">
            <div>
                <p class="eyebrow">Selezione editoriale</p>
                <h2 class="mt-2 text-3xl font-black">Articoli in evidenza</h2>
            </div>
        </div>

        <article class="card-lift mb-6 grid md:grid-cols-2">
            <img src="{{ $articles->first()['image'] }}" alt="{{ $articles->first()['title'] }}" class="h-72 w-full object-cover md:h-full">
            <div class="flex flex-col justify-center p-7 md:p-9">
                <div class="mb-3 flex items-center gap-2 text-xs text-zinc-300">
                    <span class="rounded-full bg-orange-500/20 px-3 py-1 text-orange-200">{{ $articles->first()['category'] }}</span>
                    <span class="rounded-full bg-zinc-800 px-3 py-1">{{ $articles->first()['read_time'] }}</span>
                </div>
                <h3 class="text-2xl font-bold">{{ $articles->first()['title'] }}</h3>
                <p class="mt-3 text-zinc-300">{{ $articles->first()['excerpt'] }}</p>
                <a href="{{ route('articles.show', ['slug' => $articles->first()['slug']]) }}" class="btn-primary mt-6 w-fit">Apri articolo</a>
            </div>
        </article>

        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($articles->skip(1) as $article)
                <article class="card-lift">
                    <div class="relative">
                        <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" class="h-52 w-full object-cover">
                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-zinc-950/45 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-5">
                        <div class="mb-3 flex items-center justify-between text-xs text-zinc-400">
                            <span class="rounded-full bg-zinc-800 px-3 py-1">{{ $article['category'] }}</span>
                            <span>{{ $article['read_time'] }}</span>
                        </div>
                        <h3 class="text-lg font-bold">{{ $article['title'] }}</h3>
                        <p class="mt-2 text-sm text-zinc-300">{{ $article['excerpt'] }}</p>
                        <a href="{{ route('articles.show', ['slug' => $article['slug']]) }}" class="btn-primary mt-4">Leggi dettaglio</a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection
