<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel livewire</title>

    @vite('resources/css/app.css')
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @livewireStyles
    @livewireScripts
    {{-- <script defer src="{{ asset('lib/alpineJs/alpine.js') }}"></script> --}}
</head>

<body>
    @yield('content')

    @vite('resources/js/app.js')
</body>

</html>
