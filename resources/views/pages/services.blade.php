@extends('layouts.app')

@section('title', 'Servizi - Grill Master Blog')

@section('content')
    <section class="panel p-8 md:p-12">
        <p class="eyebrow">Cosa offriamo</p>
        <h1 class="section-title mt-2">Servizi</h1>
        <p class="section-copy">Oltre al blog, offriamo servizi dedicati a privati e aziende che vogliono alzare il livello del proprio BBQ.</p>

        <div class="mt-8 grid gap-5 md:grid-cols-2">
            <article class="service-card">
                <p class="eyebrow">Servizio 01</p>
                <h2 class="text-xl font-bold text-orange-300">Consulenza BBQ</h2>
                <p class="mt-2 text-zinc-300">Analisi setup griglia, strumenti consigliati e piano cotture personalizzato.</p>
            </article>

            <article class="service-card">
                <p class="eyebrow">Servizio 02</p>
                <h2 class="text-xl font-bold text-orange-300">Corsi pratici</h2>
                <p class="mt-2 text-zinc-300">Workshop su tecniche dirette, indirette, affumicatura e gestione temperature.</p>
            </article>

            <article class="service-card">
                <p class="eyebrow">Servizio 03</p>
                <h2 class="text-xl font-bold text-orange-300">Eventi privati</h2>
                <p class="mt-2 text-zinc-300">Format live cooking per feste, team building e serate a tema carne alla griglia.</p>
            </article>

            <article class="service-card">
                <p class="eyebrow">Servizio 04</p>
                <h2 class="text-xl font-bold text-orange-300">Creazione contenuti</h2>
                <p class="mt-2 text-zinc-300">Foto, video e ricette editoriali per brand food e attività del settore ristorazione.</p>
            </article>
        </div>
    </section>
@endsection
