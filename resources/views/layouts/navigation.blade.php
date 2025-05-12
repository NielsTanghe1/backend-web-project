
<div class="nav-container">
    <nav class="navbar">
        <a href="{{ route('home') }}">Home</a>

        <a href="{{ route('news') }}">News</a>

        <a href="{{ route('dashboard') }}"> Dashboard </a>

        <a href="{{ route('FAQ') }}">FAQ</a>

        <a href="{{ route('contact') }}">Contact</a>

        <div class="nav-float-right">
            <a href="{{ route('login') }}"> Log in </a>

            <a href="{{ route('register') }}"> Register </a>

            <a>
                <form method="GET" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">
                        Logout
                    </button>   
                </form>
            </a>
        </div>
    </nav>
</div>
