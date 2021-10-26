@extends('layouts.main')

@section('title')

@section('content')
    <div class="container_char_card">

        {{-- thumb --}}
        <img src="" alt="">

        {{-- type --}}
        <div></div>
        
        {{-- title --}}
        <h2></h2>

        {{-- price --}}
        <div>
            <div></div>

            <img src="{{asset('images/adv.jpg')}}" alt="Advertising image">
        </div>

        {{-- description --}}
        <p></p>

        {{-- specifiche prodotto --}}
        <div>
            <div>
                <h3>Talent</h3>

                {{-- artists --}}
                <div>Art by:</div>
                <p></p>

                {{-- writers --}}
                <div>Written by:</div>
                <p></p>
            </div>

            <div>
                <h3>Specs</h3>

                {{-- series --}}
                <div>Series:</div>
                <p></p>

                {{-- price --}}
                <div>U.S. Price:</div>
                <p></p>

                {{-- sale_date --}}
                <div>On Sale Date:</div>
                <p></p>
            </div>
        </div>
    </div>
@endsection

