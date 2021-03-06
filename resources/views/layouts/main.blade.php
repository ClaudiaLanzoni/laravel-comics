<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Dc comics / @yield('title')</title>

    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="mark_box">
        <div class="mark">Dc power &#8480; visa &reg;</div>
        <div>Additional DC site &#9660;</div>
    </div>

    <div class="container">

        {{-- Strumento per importare un blade parziale --}}
        @include('partials.header', ['header_links' => config('header_menu')])

    </div>

    <div class="jumbotron"></div>
    <div class="banner"></div>

        <main class="main_wrap">
            
            {{-- Strumento per esporre un punto di accesso "yield" --}}
            @yield('content')
            
        </main>

        

        @include('partials.footer', ['footer_links' => config('footer_menu')])

   
    
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>

