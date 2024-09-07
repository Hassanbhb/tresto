@php
	$lang = App::getLocale() ?? 'fr';
@endphp
<html lang="{{ $lang }}" dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}" class="scroll-smooth">
    <head>
        <title>@yield('title', 'Tresto')</title>
        <meta name="description" content="@yield('description', 'Tresto - Plateforme pour Gestion de Menus en Ligne')">
        <link rel="canonical" href="{{ url()->current() }}">
        <meta name="robots" content="index, follow">

        <meta property="og:title" content="@yield('title', 'Tresto')">
        <meta property="og:description" content="@yield('description', 'Tresto - Plateforme pour Gestion de Menus en Ligne')">
        <meta property="og:image" content="https://tresto2.technopek.com/images/logo-04.png">
        <meta property="og:url" content="{{ config('app.url') }}">
        <meta property="og:type" content="website">

        <meta name="keywords" content="gestion de restaurant, menus en ligne, plateforme SAAS, QR codes restaurant, commandes en ligne, gestion des commandes, solution pour restaurants, menus numériques, livraison restaurant, logiciel restaurant, gestion de livraison, création de menus, optimisation de restaurant, Tresto, gestion de clients, gestion de personnel restaurant">

        <link rel="apple-touch-icon" sizes="180x180" href="{{asset("images/favicon/apple-touch-icon.png")}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset("images/favicon/favicon-32x32.png")}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset("images/favicon/favicon-16x16.png")}}">
        <link rel="manifest" href="images/favicon/site.webmanifest">

        <link rel="alternate" hreflang="ar" href="{{config('app.url')}}/ar">
        <link rel="alternate" hreflang="fr" href="{{config('app.url')}}/fr">

        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "WebPage",
              "name": "Your Page Title",
              "description": "A brief description of the page",
              "url": "https://tresto.ma",
              "review": {
                "@type": "Review",
                "reviewRating": {
                  "@type": "Rating",
                  "ratingValue": "5",
                  "bestRating": "5"
                },
                "author": {
                  "@type": "Person",
                  "name": "King Tacos"
                }
              },
              "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.9",
                "bestRating": "5",
                "worstRating": "3.5",
                "ratingCount": "24"
              }
            }
        </script>
            

        <meta charset="utf-8">
        <meta name="author" content="Technopek">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
        <link href="solstice-assets/fonts/fonts.css" rel="stylesheet">
        {{-- <link rel="stylesheet" href="css/tailwind/tailwind.min.css"> --}}
        {{-- <link rel="icon" type="image/png" sizes="32x32" href="shuffle-for-tailwind.png"> --}}
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&amp;display=swap"  rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        @livewireStyles
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="antialiased bg-body text-body rtl:font-body ltr:font-mono">
        {{ $slot }}
        @livewireScriptConfig 
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
    </body>
</html>