<header>
    <div class="logo mt-30">
        <img src="{{asset('images/marchio-sito-test.png')}}" alt="">
    </div>
    {{-- nav bar (home,prodotti,news) --}}
    <nav class="nav_top mt-30">
        <ul>
            <li><a href="{{route('homepage')}}" class="active">Home</a></li>
            <li><a href="">Prodotti</a></li>
            <li><a href="{{route('news')}}">News</a></li>
        </ul>
    </nav>
</header>