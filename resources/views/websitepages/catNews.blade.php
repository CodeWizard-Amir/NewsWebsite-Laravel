@extends('extends.headerFooter')
@section('metacontent')
بروز ترین اخبار {{$cat}} افغانستان و جهان رادنبال کنید
@endsection
@section('metas')
  <meta name="robots" content=" index , follow ">
@endsection
@section('css')
<link rel="stylesheet" href="{{url('/')}}/websitepages/assets/css/each_news.css">
<link rel="stylesheet" href="{{url('/')}}/websitepages/assets/css/lastNews.css">
<link rel="stylesheet" href="{{url('/')}}/websitepages/assets/css/lastNewsmediascreen.css">
@endsection
@section('title')
خبرهای {{$cat}}
@endsection
@section('big_main_body')
<div class="allNews row">
    @foreach($my_news as $news)
    <a href="/{{$news->newsCode}}/{{$news->link}}">
            <div class="eachNews">
                <img src="{{url('/')}}/{{$news->imgOfnews}}" alt="">
                <h2>
                    {{$news->titleOfnews}}
                </h2>
                <div class="summ">
                    {{ $news->summeryOfnews }}
                </div>
                   
                
                <span class="likes">
            <span>
                <i class="eye fa fa-eye"></i>
                
                    <b>
                        {{$news->view}}
                    </b>
             
            </span>
            <span>
                <i class=" heart fa fa-heart"></i>
                <b>
                {{$news->like}}
                </b>
            </span>
            <span class="">
            <i class="fa fa-comments-o"></i> 
                <b>
                {{$news->comments()->where('status' , 1)->count()}}
                </b> 
            </span>
        
        </span>
            </div>
        </a>

    @endforeach

    </div>
@endsection
@section('smal_main_body')
@include('include._leftAdds')
@endsection