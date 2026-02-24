@extends('layouts.app')

@section('title', $article['title'] . ' - Grill Master Blog')

@section('content')
    <article class="card-lift">
        <div class="relative">
            <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" class="h-[340px] w-full object-cover md:h-[460px]">
            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-zinc-950/55 via-transparent to-transparent"></div>
        </div>

        <div class="p-6 md:p-10">
            <p class="eyebrow mb-2">Dettaglio articolo</p>
            <div class="mb-3 flex flex-wrap items-center gap-2 text-xs text-zinc-300">
                <span class="rounded-full bg-orange-500/20 px-3 py-1 text-orange-200">{{ $article['category'] }}</span>
                <span class="rounded-full bg-zinc-800 px-3 py-1">{{ $article['read_time'] }}</span>
            </div>

            <h1 class="section-title !text-3xl md:!text-5xl">{{ $article['title'] }}</h1>
            <p class="mt-5 text-lg text-zinc-300">{{ $article['excerpt'] }}</p>
            <div class="mt-6 max-w-4xl rounded-2xl border border-zinc-800/80 bg-zinc-950/60 p-6">
                <p class="article-prose">{{ $article['content'] }}</p>
            </div>

            <div class="mt-8 flex flex-wrap gap-3">
                <a href="{{ route('home') }}" class="btn-muted">← Torna alla homepage</a>
                <a href="{{ route('services') }}" class="btn-primary">Servizi BBQ</a>
            </div>
        </div>
    </article>
@endsection
