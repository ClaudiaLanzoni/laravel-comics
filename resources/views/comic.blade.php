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
                <h2 class="comic_title">{{$comic['title']}}</h2>

                {{-- price --}}
                <div class="price_box">
                    <div class="available_box">
                        <div class="my_white"><span class="my_light_green">U.S. Price:</span> {{$comic['price']}}</div>
                        <div><span class="my_light_green">AVAILABLE</span></div>
                    </div>
                    
                    <div><span class="my_white">Check Availability &#9660;</span></div>
                  
                </div>

                {{-- description --}}
                <div class="descr_box">
                    <p>{{$comic['description']}}</p>
                </div>
                
            </div>
             
            <div class="apply_box">
                <h4>Advertisement</h4>
                <img class="" src="{{ asset('images/apply.png') }}" alt="Comic image">
            </div>
        </div>
    </div>
        {{-- specifiche prodotto --}}
        <div class="spec_wrap">
            <div class="container_spec">
                <div class="talent">
                    <div class="spec_title">
                        <h3>Talent</h3>
                    </div>
    
                    {{-- artists --}}
                    <div class="flex_bet">
                        <div class="title_category">
                            <p>Art by: </p>
                        </div>
                        
                        <div class="artists">

                            @php
                            echo implode(", ", $comic['artists'])  
                            @endphp
                            
                        </div>

                        
                    </div>
                       
                        {{-- writers --}}
                    <div class="flex_bet">
                        <div class="title_category">
                            <p>Written by: </p> 
                        </div>
                        
                        <div class="artists">
            
                            @php
                            echo implode(", ", $comic['writers'])  
                            @endphp
                
                        </div>
                        
                    </div>
                    
                    
                </div>
    
                <div class="specs">
                    <h3>Specs</h3>
    
                    {{-- series --}}
                    <div class="flex_bet">
                        <div class="title_category">Series:</div>
                        <p><span class="series_font">{{$comic['series']}}</span></p>
                    </div>
                    
    
                    {{-- price --}}
                    <div class="flex_bet">
                        <div class="title_category">U.S. Price:</div>
                        <p>{{$comic['price']}}</p>
                    </div>
                    
    
                    {{-- sale_date --}}
                    <div class="flex_bet">
                        <div class="title_category">On Sale Date:</div>
                        <p>{{date('d-m-y',strtotime($comic['sale_date']))}}</p>
                    </div>
                    
                </div>
            </div>
           
        </div>

        {{-- <script>     
            if(typeof window.history.pushState == 'function') {
                window.history.pushState({}, "Hide", "http://localhost:8000/comic");
            }
        </script>--}}
    
@endsection

