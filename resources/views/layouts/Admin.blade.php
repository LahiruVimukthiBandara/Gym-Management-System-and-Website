<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title ?? 'GYM Management system' }} </title>

    {{-- Styles --}}
    @vite('resources/css/app.css')

    {{-- Livewire styles --}}
    @livewireStyles

</head>

<body class=" antialiased bg-white dark:bg-[#1E2022]">

    {{-- Navbar --}}
    @include('admin/adminNavbar')

    {{-- Body content --}}
    <div>
        <main class="">
            {{ $slot }}
        </main>
    </div>

    {{-- Livewire scripts --}}
    @livewireScripts

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
