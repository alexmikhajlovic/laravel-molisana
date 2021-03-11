<header>

    <div id="logo">
        <a href="{{ route('home-page') }}"><img src="{{ asset('img/logo.png' )}}" alt="MOLISANA LOGO"></a>
    </div>

    <nav class="main-menu">
        <ul>
            <!-- // Request::route()->getName() -->
            <li><a href="{{ route('home-page') }}" class="{{ (Request::route()->getName() == 'home-page') ? 'active'  : '' }}">HOME</a></li>
            <li><a href="{{ route('products-page') }}" class="{{ (Request::route()->getName() == 'products-page') ? 'active' : '' }}">PRODOTTI</a></li>
            <li><a href="{{ route('news-page') }}" class="{{ (Request::route()->getName() == 'news-page') ? 'active' : '' }}">NEWS</a></li>
        </ul>
    </nav>

</header>