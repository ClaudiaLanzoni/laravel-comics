@extends('layouts.main')

@section('title', 'Comics')

{{-- Funzionalità per accedere al punto di accesso specificato nell'aromengo della funzione --}}
@section('content') 

    <div class="card_section">
        
        <div class="card_element">

            @foreach ($comics as $valore)

            <div>
                <img class="card_img_container"
                src="{{$valore['thumb']}}" alt="{{$valore['title']}} image">
            </div>
        </div>

        <div class="series_name_container">
            <div class="series_name_style">{{$valore['title']}}</div>
        </div>

        @endforeach
        
    </div>

    
    

@endsection