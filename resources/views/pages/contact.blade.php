@extends('layouts.app')

@section('title', 'Contatti - Grill Master Blog')

@section('content')
    <section class="panel p-8 md:p-12">
        <p class="eyebrow">Parliamo di BBQ</p>
        <h1 class="section-title mt-2">Contatti</h1>
        <p class="section-copy">Scrivici per collaborazioni, corsi privati o domande sulle ricette. Rispondiamo in 24h.</p>

        <div class="mt-8 grid gap-6 md:grid-cols-3">
            <div class="content-card">
                <p class="eyebrow">Email</p>
                <h2 class="text-lg font-bold text-orange-300">hello@grillmaster.it</h2>
                <p class="mt-2 text-sm text-zinc-300">Supporto, partnership e press.</p>
            </div>
            <div class="content-card">
                <p class="eyebrow">Telefono</p>
                <h2 class="text-lg font-bold text-orange-300">+39 333 000 1122</h2>
                <p class="mt-2 text-sm text-zinc-300">Lun–Ven 10:00 - 18:00.</p>
            </div>
            <div class="content-card">
                <p class="eyebrow">Social</p>
                <h2 class="text-lg font-bold text-orange-300">@grillmaster</h2>
                <p class="mt-2 text-sm text-zinc-300">Instagram, YouTube, TikTok.</p>
            </div>
        </div>
    </section>
@endsection
