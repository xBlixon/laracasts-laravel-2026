<div class="navbar bg-base-200 shadow-sm">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
            </div>
            <ul
                tabindex="-1"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About us</a></li>
                <li><a href="/contact">Contact us</a></li>
                <li><a href="/quote">Quote</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost text-xl">Laravel 2026</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About us</a></li>
            <li><a href="/contact">Contact us</a></li>
            <li><a href="/quote">Quotes</a></li>
        </ul>
    </div>
    <div class="navbar-end space-x-2">
        @guest
            <a class="btn btn-primary" href="/register">Register</a>
            <a class="btn btn-secondary" href="/login">Log In</a>
        @endguest

        @auth
            <a href="/quote/create" class="btn btn-info text-lg">+</a>
            <form action="/logout" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-warning">Logout</button>
            </form>
        @endauth
    </div>
</div>
