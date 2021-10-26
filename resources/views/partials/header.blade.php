<header>
    <img src="{{asset('images/dc-logo.png')}}" alt="Dc logo">

    @foreach ($header_links as $valore)
    <ul>

        <li> <a 
            {{-- class="{{request()->routeIs($valore['route']) ? 'active' : ''}}" DA USARE PER CLASSE ACTIVE --}}
            href="{{ $valore['route'] }}"> 
            {{$valore['item']}} 
        </a> </li>

    </ul>
    @endforeach

</header>


