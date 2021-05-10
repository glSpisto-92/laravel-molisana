@extends('layouts.main')

@section('title')
    La molisana | Home 
@endsection 

@section('content')

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

@endsection
        