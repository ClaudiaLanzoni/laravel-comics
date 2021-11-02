<header>
    
    <img src="{{asset('images/dc-logo.png')}}" alt="Dc logo">

    @foreach ($header_links as $valore)
    <div>
        
        <ul>

            <li> <a 
                {{-- class="{{request()->routeIs($valore['route']) ? 'active' : ''}}" --}}
                href="{{ $valore['route'] }}"> 
                {{$valore['item']}} 
            </a> </li>
    
        </ul>
       
        
    </div>
    
    @endforeach

    <div class="search_box">
        <p>Search &#x1F50E;</p>
    </div>

</header>




