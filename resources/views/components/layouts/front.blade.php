@php
	$lang = session()->get('locale') ?? 'ar';
@endphp
<html lang="{{ $lang }}" dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}" class="scroll-smooth">
    <head>
        <title>{{ $title ?? 'Tresto' }}</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
        {{-- <link href="solstice-assets/fonts/fonts.css" rel="stylesheet"> --}}
        {{-- <link rel="stylesheet" href="css/tailwind/tailwind.min.css"> --}}
        {{-- <link rel="icon" type="image/png" sizes="32x32" href="shuffle-for-tailwind.png"> --}}
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&amp;display=swap"  rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">

        @livewireStyles
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="antialiased bg-body text-body rtl:font-body ltr:font-mono">
        {{ $slot }}
        @livewireScriptConfig 
    </body>
</html>