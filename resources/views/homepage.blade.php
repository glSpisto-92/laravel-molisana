<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    {{-- header (logo e nav bar) --}}
    <header>
        <div class="logo mt-30">
            <img src="{{asset('images/marchio-sito-test.png')}}" alt="">
        </div>
        {{-- nav bar (home,prodotti,news) --}}
        <nav class="nav_top mt-30">
            <ul>
                <li><a href="" class="active">Home</a></li>
                <li><a href="">Prodotti</a></li>
                <li><a href="">News</a></li>
            </ul>
        </nav>
    </header>

    {{-- main content (paste, info) --}}
    <main>
        <div class="wrapper_main">
            <h2>Le lunghe</h2>
            <div class="container cards">
                @foreach ($lunghe as $pasta)
                <div class="card">
                    <img src="{{$pasta['src']}}" alt="">
                </div>
                @endforeach
            </div>

            <h2>Le lunghe</h2>
            <div class="container cards">
                @foreach ($corte as $pasta)
                <div class="card">
                    <img src="{{$pasta['src']}}" alt="">
                </div>
                @endforeach
            </div>

            <h2>Le lunghe</h2>
            <div class="container cards">
                @foreach ($cortissime as $pasta)
                <div class="card">
                    <img src="{{$pasta['src']}}" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>