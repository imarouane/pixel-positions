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
        <div class="border-b border-white/10 px-10">
            <nav class="flex justify-between items-center py-4 ">
                <div>
                    <a href="{{ route('home') }}">
                        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="pixel positions logo">
                    </a>
                </div>
                <div>
                    <ul class="flex gap-6 font-semibold">
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Slaries</a></li>
                        <li><a href="#">Companies</a></li>
                    </ul>
                </div>
                <div>
                    <a href="#"
                        class="inline-flex items-center gap-x-2 py-1 px-3 border border-transparent hover:border-blue-800 rounded transition-all duration-200">
                        <span class="w-3 h-3 bg-blue-700"></span>Post a job
                    </a>
                </div>
            </nav>
        </div>

        <main class="sm:px-10 mt-10 max-w-screen-xl mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
