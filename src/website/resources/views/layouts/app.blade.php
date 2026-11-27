<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Schoolvoetbaltoernooi')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-school-charcoal flex flex-col min-h-screen">

    
    <header class="bg-school-charcoal text-white shadow-sm">
        <div class="max-w-5xl mx-auto px-6 py-4 flex flex-wrap items-center justify-between gap-4">
            <a href="{{ url('/') }}" class="text-xl font-bold text-white">
                (Logo)
            </a>

            
            <nav class="flex flex-wrap items-center gap-6 text-sm font-medium">
                <a href="{{ url('/') }}" class="hover:text-school-light transition">Home</a>
                <a href="{{ url('/wedstrijdschema') }}" class="hover:text-school-light transition">Wedstrijdschema</a>
                <a href="{{ url('/inschrijven') }}" class="hover:text-school-light transition">Inschrijven</a>
                <a href="{{ url('/contact') }}" class="hover:text-school-light transition">Contact</a>
                <a href="{{ url('/login') }}" class="bg-white text-school-charcoal px-3 py-1 rounded shadow-xs hover:bg-school-cream transition">
                    Inloggen
                </a>
            </nav>
        </div>
    </header>

    
    <main class=" bg-school-cream flex-grow">
        @yield('content')
    </main>

    
    <footer class="bg-school-charcoal text-white py-6">
        <div class="max-w-5xl mx-auto px-6 flex flex-wrap items-center justify-center gap-3 text-sm">
            <span class="font-semibold">(Logo)</span>
            <span>·</span>
            <a href="{{ url('/contact') }}" class="hover:text-school-light hover:underline">Contact</a>
            <span>·</span>
            <a href="{{ url('/spelregels') }}" class="hover:text-school-light hover:underline">Spelregels</a>
            <span>·</span>
            <a href="{{ url('/privacy') }}" class="hover:text-school-light hover:underline">Privacy</a>
        </div>
    </footer>

</body>
</html>
