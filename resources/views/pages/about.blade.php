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

        <div class="mt-8 grid gap-5 md:grid-cols-3">
            <div class="content-card">
                <p class="eyebrow">01</p>
                <h2 class="mt-2 text-lg font-bold text-orange-300">Esperienza</h2>
                <p class="mt-2 text-sm text-zinc-300">Oltre 10 anni tra eventi BBQ, catering e formazione pratica sulla cottura alla brace.</p>
            </div>
            <div class="content-card">
                <p class="eyebrow">02</p>
                <h2 class="mt-2 text-lg font-bold text-orange-300">Metodo</h2>
                <p class="mt-2 text-sm text-zinc-300">Guide passo-passo, test reali e tecniche replicabili con griglie domestiche e professionali.</p>
            </div>
            <div class="content-card">
                <p class="eyebrow">03</p>
                <h2 class="mt-2 text-lg font-bold text-orange-300">Community</h2>
                <p class="mt-2 text-sm text-zinc-300">Una community che cresce ogni giorno, fatta di appassionati che vogliono migliorare davvero.</p>
            </div>
        </div>
    </section>
@endsection
