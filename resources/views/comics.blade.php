@extends('layouts.main')

@section('title', 'Comics')

{{-- Funzionalità per accedere al punto di accesso specificato nell'aromengo della funzione --}}
@section('content') 

    <div class="main_section">

        <div class="card_section">
            
            @foreach ($comics as $index => $valore)
            
                
                    <div class="card_element">
                        <a href="{{url("/comic/$index")}}">
                            <div>
                                <img class="card_img_container"
                                src="{{$valore['thumb']}}" alt="{{$valore['title']}} image">
                            </div>
                        
                
                            <div class="series_name_container">
                                <div class="series_name_style">{{$valore['title']}}</div>
                            </div>
                            
                        </a>
                    </div>
            
                    
                    
                    @endforeach
                    
                </div>

    </div>

    
        
    

    
    

@endsection