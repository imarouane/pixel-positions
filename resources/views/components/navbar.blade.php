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
        @auth
            <div class="flex gap-2 items-center justify-center">
                <a href="/jobs"
                    class="inline-flex items-center gap-x-2 py-1 px-3 border border-transparent hover:border-blue-800 rounded transition-all duration-200">
                    <span class="w-3 h-3 bg-blue-700"></span>Post a job
                </a>
                <div>
                    <button form="logout_form"
                        class="text-red-600 hover:text-red-600/70 transition-all duration-200">Logout</button>
                    <form action="{{ route('logout') }}" method="POST" id="logout_form">@csrf</form>
                </div>
            </div>
        @endauth

        @guest
            <div class="flex gap-3 justify-center items-center">
                <a href="{{ route('register') }}"
                    class="py-1 px-3 border border-blue-800 rounded hover:shadow-lg hover:shadow-blue-700/30 transition-all duration-200">Sign
                    Up</a>
                <a href="{{ route('login') }}"
                    class="py-1 px-3 border border-blue-700/10 bg-blue-700 rounded hover:bg-blue-700/60 transition-all duration-200">Login</a>
            </div>
        @endguest

    </div>
</nav>
