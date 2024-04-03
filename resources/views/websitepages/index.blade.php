@extends('extends.headerFooter')
@section('metas')
  <meta name="robots" content=" index , follow ">
@endsection
@section('metacontent')
@if(!is_null($bignews))
{{$bignews->summeryOfnews}}
@endif  
@endsection
@section('big_main_body')
    @if(is_null($bignews))
<p>هنوز خبری درج نشده است !</p>
    @else
<img src="{{url('/')}}/{{$bignews->imgOfnews}}" alt="{{$bignews->imgaltOfnews}}">
            <h2>
                {{$bignews->titleOfnews}}
            </h2>
            {!! $bignews->bodyOfnews !!}

   
                @if(!$bignews->video == null)
                <div class="vedio">
                    <video width="520" height="340" controls>
                        <source src="{{$bignews->video}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                @endif
            @endif
@endsection
@section('smal_main_body')
@include('include._leftAdds')
@endsection