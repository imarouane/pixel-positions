<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-hanken-grotesk bg-black text-white">
    <div class="">
        <header class="border-b border-white/10 px-10">
            <x-navbar />
        </header>

        <main class="sm:px-10 mt-10 max-w-screen-xl mx-auto">
            {{ $slot }}
        </main>
        <footer class="mt-10">
            <x-footer />
        </footer>
    </div>
</body>

</html>
