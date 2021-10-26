@extends('layouts.main')

@section('title')

@section('content')
    <div class="container_char_card">

        <div class="relative">
            {{-- thumb --}}
            <img src="{{ $comic['thumb'] }}" alt="Comic image">

            {{-- type --}}
            <div class="type">{{$comic['type']}}</div>
        </div>
        
        <div class="descr_wrap">

            <div class="descr-first-half">
                {{-- title --}}
                <h2>{{$comic['title']}}</h2>

                {{-- price --}}
                <div>
                    <div>{{$comic['price']}}</div>
                </div>

                {{-- description --}}
                <p>{{$comic['description']}}</p>
            </div>
             
            <div>
                <img class="" src="{{ asset('images/apply.png') }}" alt="Comic image">
            </div>
        </div>

        {{-- specifiche prodotto --}}
        <div class="spec_wrap">
            <div>
                <h3>Talent</h3>

                {{-- artists --}}
                <div class="flex_bet">
                    <div>Art by: </div>

                    @foreach ($comic['artists'] as $artist)
                        <p>{{$artist}},</p>
                    @endforeach
                </div>
                   
                    {{-- writers --}}
                <div class="flex_bet">
                    <div>Written by: </div>
                    
                    @foreach ($comic['writers'] as $writer)
                        <p>{{$writer}}</p>
                    @endforeach
                </div>
                
                
            </div>

            <div class="specs">
                <h3>Specs</h3>

                {{-- series --}}
                <div class="flex_bet">
                    <div>Series:</div>
                    <p>{{$comic['series']}}</p>
                </div>
                

                {{-- price --}}
                <div class="flex_bet">
                    <div>U.S. Price:</div>
                    <p>{{$comic['price']}}</p>
                </div>
                

                {{-- sale_date --}}
                <div class="flex_bet">
                    <div>On Sale Date:</div>
                    <p>{{$comic['sale_date']}}</p>
                </div>
                
            </div>
        </div>
    </div>
@endsection

