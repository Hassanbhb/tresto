@php
	$lang = session()->get('locale') ?? 'ar';
@endphp
<html lang="{{ $lang }}" dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}">
    <head>
        <title>{{ $title ?? 'Tresto' }}</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
        {{-- <link href="solstice-assets/fonts/fonts.css" rel="stylesheet"> --}}
        {{-- <link rel="stylesheet" href="css/tailwind/tailwind.min.css"> --}}
        {{-- <link rel="icon" type="image/png" sizes="32x32" href="shuffle-for-tailwind.png"> --}}

        @livewireStyles
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="antialiased bg-body text-body font-body">
        {{ $slot }}
        @livewireScriptConfig 
    </body>
</html>