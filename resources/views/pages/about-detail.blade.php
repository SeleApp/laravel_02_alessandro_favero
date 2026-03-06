@extends('layouts.app')

@section('title', 'Dettaglio dipendente - Grill Master Blog')

@section('content')
    <section class="panel p-8 md:p-12">
        <p class="eyebrow">Profilo team</p>
        <h1 class="section-title mt-2">{{ $user['name'] }} {{ $user['surname'] }}</h1>
        <p class="mt-2 text-lg font-semibold text-orange-200">{{ $user['role'] }}</p>

        <div class="mt-6 grid gap-6 md:grid-cols-[2fr,1fr]">
            <div class="content-card">
                <h2 class="text-lg font-bold text-orange-300">Cosa fa nel team</h2>
                <p class="mt-2 text-sm text-zinc-300">Gestisce progetti, coordina la community e porta esperienza pratica ai nostri contenuti sulla griglia.</p>
            </div>
            <div class="content-card">
                <h3 class="text-sm font-semibold text-orange-200">Contatti rapidi</h3>
                <p class="mt-2 text-sm text-zinc-300">Disponibile per workshop, consulenze e collaborazioni editoriali.</p>
            </div>
        </div>

        <a href="{{ route('about') }}" class="btn-muted mt-8 inline-flex items-center">← Torna al team</a>
    </section>
@endsection
