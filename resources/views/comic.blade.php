@extends('layouts.main')

@section('title')

@section('content')
    <div class="container_char_card">

        {{-- thumb --}}
        <img src="{{ $comic['thumb'] }}" alt="Comic image">

        {{-- type --}}
        <div>{{$comic['type']}}</div>
        
        {{-- title --}}
        <h2>{{$comic['title']}}</h2>

        {{-- price --}}
        <div>
            <div>{{$comic['price']}}</div>

            <img class="" src="{{ asset('images/apply.png') }}" alt="Comic image">
        </div>

        {{-- description --}}
        <p>{{$comic['description']}}</p>

        {{-- specifiche prodotto --}}
        <div>
            <div>
                <h3>Talent</h3>

                @foreach ($comic['artists'] as $artist)
                    {{-- artists --}}
                    <div>Art by:</div>
                    <p>{{$artist}}</p>
                @endforeach
                
                @foreach ($comic['writers'] as $writer)
                    {{-- writers --}}
                    <div>Written by:</div>
                    <p>{{$writer}}</p>
                @endforeach
                
            </div>

            <div>
                <h3>Specs</h3>

                {{-- series --}}
                <div>Series:</div>
                <p>{{$comic['series']}}</p>

                {{-- price --}}
                <div>U.S. Price:</div>
                <p>{{$comic['price']}}</p>

                {{-- sale_date --}}
                <div>On Sale Date:</div>
                <p>{{$comic['sale_date']}}</p>
            </div>
        </div>
    </div>
@endsection

