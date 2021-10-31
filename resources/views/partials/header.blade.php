<header>
    
    <img src="{{asset('images/dc-logo.png')}}" alt="Dc logo">

    @foreach ($header_links as $valore)
    <div class="link_line_box">
        <div>
            <ul>

                <li> <a 
                    {{-- class="{{request()->routeIs($valore['route']) ? 'active' : ''}}" DA USARE PER CLASSE ACTIVE --}}
                    href="{{ $valore['route'] }}"> 
                    {{$valore['item']}} 
                </a> </li>
        
            </ul>
        </div>

        
        
    </div>
    
    @endforeach

    {{-- <div class="search_box">
        <p>Search <i class="fas fa-search"></i></p>
    </div> --}}

</header>


