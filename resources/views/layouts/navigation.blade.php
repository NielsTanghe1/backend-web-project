<!-- <style>
    .navdiv{
        background-color: beige;
        display: flex;
    }
    .navbar{
        display: flex;
        flex-direction: row;
    }
    li {
        margin: 10px;
    }
</style> -->

<nav>
    <div class="nav-container">
        <ul class="navbar">
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('news') }}">News</a>
            </li>
            <li>
                <a href="{{ route('FAQ') }}">FAQ</a>
            </li>
            <li>
                <a href="{{ route('contact') }}">Contact</a>
            </li>
            <li>
                <a href="{{ route('login') }}"> Log in </a>
            </li>
            <li>
                <a href="{{ route('register') }}"> Register </a>
            </li>
        </ul>
    </div>
</nav>