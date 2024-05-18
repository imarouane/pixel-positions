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
