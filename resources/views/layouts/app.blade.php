<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Grill Master Blog')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="app-shell min-h-screen text-zinc-100 antialiased" style="font-family: 'Manrope', sans-serif;">
    <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_12%_8%,_rgba(251,146,60,0.24),_transparent_34%),radial-gradient(circle_at_86%_6%,_rgba(180,83,9,0.2),_transparent_28%),radial-gradient(circle_at_50%_100%,_rgba(161,98,7,0.12),_transparent_28%)]"></div>
    <div class="noise-overlay pointer-events-none absolute inset-0 -z-10 opacity-[0.10]"></div>
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-[460px] bg-gradient-to-b from-zinc-900/75 to-transparent"></div>

    <header class="sticky top-0 z-50 bg-zinc-950/70 py-4 backdrop-blur-md">
        <nav class="mx-auto flex w-full max-w-6xl items-center justify-between rounded-2xl border border-zinc-800/80 bg-zinc-900/65 px-5 py-3 shadow-xl shadow-black/20">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <span class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-br from-orange-400 to-amber-700 text-sm font-black text-zinc-950">🔥</span>
                <span class="text-base font-extrabold tracking-wide text-orange-300 md:text-lg">Grill Master Blog</span>
            </a>
            <div class="flex items-center gap-1 text-sm md:gap-3">
                <a href="{{ route('home') }}" class="top-link {{ request()->routeIs('home') ? 'top-link-active' : '' }}">Homepage</a>
                <a href="{{ route('about') }}" class="top-link {{ request()->routeIs('about', 'about.detail') ? 'top-link-active' : '' }}">Chi siamo</a>
                <a href="{{ route('movies') }}" class="top-link {{ request()->routeIs('movies', 'movie.detail') ? 'top-link-active' : '' }}">Film</a>
                <a href="{{ route('services') }}" class="top-link {{ request()->routeIs('services') ? 'top-link-active' : '' }}">Servizi</a>
                <a href="{{ route('contact') }}" class="top-link {{ request()->routeIs('contact') ? 'top-link-active' : '' }}">Contatti</a>
            </div>
        </nav>
    </header>

    <main class="app-main mx-auto w-full max-w-6xl px-5 py-10 md:py-14">
        @yield('content')
    </main>

    <footer class="mx-auto mb-8 mt-2 w-full max-w-6xl px-5">
        <div class="rounded-2xl border border-zinc-800/80 bg-zinc-900/50 px-5 py-4 text-center text-xs text-zinc-500">
            © {{ now()->year }} Grill Master Blog · Fuoco, tecnica e passione.
        </div>
    </footer>
</body>
</html>
