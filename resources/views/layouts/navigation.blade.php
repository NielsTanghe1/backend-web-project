
<div class="nav-container">
    <nav class="navbar">
        <a href="{{ route('index') }}">Home</a>

        <a href="{{ route('news') }}">News</a>

        <a href="{{ route('FAQ') }}">FAQ</a>
        @if(Auth::user())
        <a href="{{ route('contact') }}">Contact</a>
        @endif
        <div class="nav-float-right">
            @auth
            @if(Auth::user()->admin == true)
                <a href="{{ route('adminpanel') }}"> Admin Panel </a>
            @endif
            <a href="{{ route('makepost') }}">Make a post</a>

            <a href="{{ route('dashboard') }}"> Dashboard </a>

            <a href="{{ route('profile.edit') }}"> Edit profile </a>
            @endauth
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
