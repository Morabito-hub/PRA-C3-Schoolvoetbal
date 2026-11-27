@extends('layouts.app')

@section('title', 'Home - Schoolvoetbaltoernooi')

@section('content')
    
    <section class="bg-school-cream py-16 px-6 text-center">
        <div class="max-w-3xl mx-auto">
            <p class="text-xs uppercase tracking-widest text-school-charcoal mb-3">
                <img src="{{ asset('img/voetbalfoto.webp') }}?v={{ filemtime(public_path('img/voetbalfoto.webp')) }}" alt="Voetbalfoto" class="w-64 h-50 mx-auto">
            </p>
            <h1 class="text-3xl md:text-4xl font-bold text-school-charcoal mb-3">
                Schoolvoetbaltoernooi
            </h1>
            <p class="text-school-charcoal mb-8">
                Een sportieve dag vol plezier, teamwork en voetbal!
            </p>

            
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ url('/inschrijven') }}" class="bg-school-green hover:brightness-95 text-white font-semibold px-6 py-2.5 rounded transition">
                    Inschrijven
                </a>
                <a href="{{ url('/wedstrijdschema') }}" class="bg-school-light hover:brightness-95 text-school-charcoal font-semibold px-6 py-2.5 rounded transition">
                    Bekijk schema
                </a>
            </div>
        </div>
    </section>

    
    <div class=" bg-school-cream max-w-5xl mx-auto px-6 py-10 space-y-6">

        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div class="bg-school-light rounded-2xl p-6">
                <div class="text-school-charcoal mb-2">📅</div>
                <h2 class="text-lg font-bold text-school-charcoal mb-1">Toernooidata</h2>
                <p class="text-sm text-school-charcoal">
                    Bekijk de verschillende speeldagen.
                </p>
            </div>

            
            <div class="bg-school-light rounded-2xl p-6">
                <div class="text-school-charcoal mb-2">📍</div>
                <h2 class="text-lg font-bold text-school-charcoal mb-1">Locatie</h2>
                <p class="text-sm text-school-charcoal">
                    M.O.C. - Bergen op Zoom
                </p>
            </div>
        </div>

        
        <section class="bg-school-light rounded-2xl p-6">
            <h2 class="text-lg font-bold text-school-charcoal mb-2">Over het toernooi</h2>
            <p class="text-sm text-school-charcoal leading-relaxed">
                Korte introductie over het schoolvoetbaltoernooi, de deelnemende scholen en het doel van het evenement.
            </p>
        </section>

        
        <section class="bg-school-light rounded-2xl p-6">
            <h2 class="text-lg font-bold text-school-charcoal mb-6">Leeftijdsgroepen</h2>
            
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-center">
                <div class="flex flex-col items-center">
                    <span class="text-xl mb-1">👥</span>
                    <span class="text-sm font-medium text-school-charcoal">Groep 3-4</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-xl mb-1">👥</span>
                    <span class="text-sm font-medium text-school-charcoal">Groep 5-6</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-xl mb-1">👥</span>
                    <span class="text-sm font-medium text-school-charcoal">Groep 7-8</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-xl mb-1">👥</span>
                    <span class="text-sm font-medium text-school-charcoal">1e klas</span>
                </div>
            </div>
        </section>

        
        <section class="bg-school-light rounded-2xl p-6">
            <h2 class="text-lg font-bold text-school-charcoal mb-2">Nieuws en mededelingen</h2>
            <p class="text-sm text-school-charcoal">
                Belangrijke informatie voor deelnemers en bezoekers.
            </p>
        </section>

    </div>
@endsection
