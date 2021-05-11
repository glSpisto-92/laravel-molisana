<header>
    <div class="logo mt-30">
        <img src="{{asset('images/marchio-sito-test.png')}}" alt="">
    </div>
    {{-- nav bar (home,prodotti,news) --}}
    <nav class="nav_top mt-30">
        <ul>
            <li class="{{Route::getCurrentRoute()->getName() == 'homepage' ? 'active' : ''}}"><a href="{{route('homepage')}}">Home</a></li>
            <li class="{{Route::getCurrentRoute()->getName() == 'product' ? 'active' : ''}}"><a href="{{route('product', ['id' => 0])}}">Prodotti</a></li>
            <li class="{{Route::getCurrentRoute()->getName() == 'news' ? 'active' : ''}}"><a href="{{route('news')}}">News</a></li>
        </ul>
    </nav>
</header>