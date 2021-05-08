<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    {{-- css --}}
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
            <div class="container">
                <h2>Le lunghe</h2>
            </div>
            <div class="container cards">
                @foreach ($lunghe as $pasta)
                <div class="card">
                    <img src="{{$pasta['src']}}" alt="">
                </div>
                @endforeach
            </div>
            
            <div class="container">
                <h2>Le corte</h2>
            </div>
            <div class="container cards">
                @foreach ($corte as $pasta)
                <div class="card">
                    <img src="{{$pasta['src']}}" alt="">
                </div>
                @endforeach
            </div>

            <div class="container">
                <h2>Le cortissime</h2>
            </div>
            <div class="container cards">
                @foreach ($cortissime as $pasta)
                <div class="card">
                    <img src="{{$pasta['src']}}" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </main>
    
    {{-- footer(credits, info) --}}
    <footer>
        <div class="wrapper_footer">
            <div class="container">
               
                {{-- section info footer --}}
                <div class="footer_info">
                    <img src="{{asset('images/marchio-sito-test.png')}}" alt="">
                    <p><small>Ragione sociale: LA MOLISANA S.P.A.<br>SEDE LEGALE: CONTRADA COLLE DELLE API, 100/A - 86100 - CAMPOBASSO (CB)<br>PEC: LAMOLISANA@PEC.IT<br>TEL: +39 0874 4981<br>FAX: +39 0874 629584<br>PER SEGNALAZIONI SCRIVERE A:INFO@LAMOLISANA.IT<br>PER CONTATTARE L'AREA COMMERCIALE:
                        COMMERCIALE@LAMOLISANA.IT<br>PER CONTATTARE L'AREA EXPORT:EXPORT@LAMOLISANA.IT</small></p>
                </div>

                {{-- section pastificio, prodotti ecc... --}}
                <div class="footer_left">
                    <div class="box_list">
                        <h3>Pastificio</h3>
                        <ul>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                        </ul>
                    </div>
                    <div class="box_list">
                        <h3>Pastificio</h3>
                        <ul>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                        </ul>
                    </div>
                    <div class="box_list">
                        <h3>Pastificio</h3>
                        <ul>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                            <li><a href="">lorem ipsum dolor</a></li>
                    </div>
                </div>


            </div>
        </div>
    </footer>
</body>
</html>