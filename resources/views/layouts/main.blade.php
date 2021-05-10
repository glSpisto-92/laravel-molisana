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
        <title>@yield('title')</title>
    </head>
    <body>
        {{-- header (logo e nav bar) --}}
        @include('parts.header')

        {{-- main content (paste, info) --}}
        <main>
            <div class="wrapper_main">      
                    @yield('content')
            </div>
        </main>
        
        {{-- footer(credits, info) --}}
        @include('parts.footer')
    </body>
</html>