<div class="main_add">
        @if(!is_null($tbslider))
        <img src="{{url('/')}}/{{$tbslider->img}}" alt="{{$tbslider->imgalt}}">
        @else
          
        @endif
  
    
            </div>
            <div class="slider_add">
                <div class="swiper mySlider_add">
                    <div class="swiper-wrapper">
                    @foreach($mbslider as $slider)
                    <div class="swiper-slide">
                        <img src="{{url('/')}}/{{$slider->img}}" alt="">  
                    </div>
                    @endforeach
                    </div>
                  </div>
            </div>
            <div class="T_M_V">
                <h2>پر بازدید ترین اخبار</h2>
                <ul>
                  @foreach($N_moreviwes as $N_moreviwe)
                  <li>
                        <a href="/{{$N_moreviwe->newsCode}}/{{$N_moreviwe->link}}" title="تاریخ و ساعت انتشار{{$N_moreviwe->created_at}}">{{$N_moreviwe->titleOfnews}}</a>
                        
                    </li>
                  @endforeach
                </ul>

            </div>
            
            <div class="main_add">
              @if(!is_null($tpslider))
                  <img src="{{url('/')}}/{{$tpslider->img}}" alt="{{$tpslider->imgalt}}">
              @endif
   
            </div>
            <div class="slider_add">
                <div class="swiper mySlider_add">
                    <div class="swiper-wrapper">
                    @foreach($mpslider as $slider)
                    <div class="swiper-slide">
                        <img src="{{url('/')}}/{{$slider->img}}" alt="">  
                    </div>
                    @endforeach
                    </div>
                  </div>
            </div>
            <div class="the_most_favorites">
                <h2>
                    محبوب ترین خبرها
                </h2>
                <ul>
                @foreach($N_morelikes as $N_morelikes)
                <li><a href="/{{$N_morelikes->newsCode}}/{{$N_morelikes->link}}">
                        <div class="T_M_F_img">
                            <img src="{{url('/')}}/{{$N_morelikes->imgOfnews}}" alt="{{$N_morelikes->imgaltOfnews}}">
                        </div>
                        <p> 
                            {{$N_morelikes->titleOfnews}} 
                        </p>

                    </a></li>
                  @endforeach
                </ul>
        
            </div>