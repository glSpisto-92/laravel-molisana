@extends('layouts.main')

@section('title')
    Paste
@endsection

@section('content')
    <div class="product_paste">
        <div class="container">
            <h2>{{$paste['titolo']}}</h2>
            <img src="{{$paste['src-h']}}" alt="">
            <img src="{{$paste['src-p']}}" alt="">
            <p>
                {!!$paste['descrizione']!!}
            </p>
        </div>
    </div>
@endsection
