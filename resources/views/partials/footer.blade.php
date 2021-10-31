<footer>
    <div class="upper_footer_wrap">
            <div class="items_wrap">
                @foreach ($footer_links as $valore)

            
                <div class="items_box">
                    <h3>{{$valore['title']}}</h3>   
            
                    @foreach ($valore['content'] as $content)
                    <ul>
                        <li>{{$content}}</li>
                    </ul>
                    @endforeach 
                </div>
                
                @endforeach

            </div>
            
            <div class="overflow_bg">
                <img class="dc_logo_bg" src="{{asset('images/dc-logo-bg.png')}}" alt="dc logo">
            </div>
           
      
</div>

<div class="downer_footer_wrap">

    <button class="btn_footer" >SIGN-UP NOW!</button>

    <div class="media_logo_section">
        <p class="my_inline">Follow us</p>
        
        <img src="{{asset('images/footer-facebook.png')}}" alt="Facebook logo">

        <img src="{{asset('images/footer-twitter.png')}}" alt="Twitter logo">

        <img src="{{asset('images/footer-youtube.png')}}" alt="Youtube logo">

        <img src="{{asset('images/footer-pinterest.png')}}" alt="Pinterest logo">

        <img src="{{asset('images/footer-periscope.png')}}" alt="Periscope logo">
    </div>

</div>
    
</footer>