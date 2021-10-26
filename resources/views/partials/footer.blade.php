<footer>
    <div class="bg_black">

    
    @foreach ($footer_links as $valore)

        <h3>{{$valore['title']}}</h3>   

        @foreach ($valore['content'] as $content)
        <ul>
            <li>{{$content}}</li>
        </ul>
        @endforeach 

    @endforeach

</div>
    
</footer>