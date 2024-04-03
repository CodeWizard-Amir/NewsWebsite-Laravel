@extends('extends.headerFooter')
@section('metas')
<meta name="robots" content=" noindex , follow ">
@endsection
@section('css')
<link rel="stylesheet" href="{{url('/')}}/websitepages/assets/css/each_news.css">
<link rel="stylesheet" href="{{url('/')}}/websitepages/assets/css/each_newsmediascreen.css">
@endsection

@section('title')
{{$thisnews->titleOfnews}}
@endsection
@section('big_main_body')

 <div class="each_news">
    <form class="d-none" id="viewControl" method="POST" action="/viewCounter/{{$thisnews->newsCode}}" enctype="multipart/form-data">
        <input type="text" name="code" value="{{$thisnews->newsCode}}" id="">
        <input type="submit" value="">
    </form>
    <form class="d-none" id="likeControl" method="POST" action="/likeControl/{{$thisnews->newsCode}}" enctype="multipart/form-data">
        <input type="text" name="code" value="{{$thisnews->newsCode}}" id="">
        <input type="submit" value="">
    </form>
    <span class="codeOfnews">کد خبر : <b>{{$thisnews->newsCode}}</b></span>
        <span class="likes">
            <span>
                <i class="eye fa fa-eye"></i>
                
                    <b>
                    {{$thisnews->view}}
                    </b>
            
                    
               
            </span>
            <span>
                <i class=" heart fa fa-heart"></i>
                <b>
                {{$thisnews->like}}
                </b>
            </span>
            <span class="">
            <i class="fa fa-comments-o"></i> 
                <b>
                {{$thisnews->comments()->where('status' , 1)->count()}} 
                </b> 
            </span>
        
        </span>
        <br>
        <br>
        <br>
        <h2 class="headingnews">
            {{$thisnews->titleOfnews}}
        </h2>
        <p class="sumery">
            {{$thisnews->summeryOfnews}}
        </p>
        <img src="{{url('/')}}/{{$thisnews->imgOfnews}}" alt="{{$thisnews->imgaltOfnews}}" title="{{$thisnews->created_at}}">
        
        {!! $thisnews->bodyOfnews !!}
    </div>
        @if(!$thisnews->video == null)
                <div class="vedio">
                    <video width="520" height="340" controls>
                        <source src="{{url('/')}}/{{$thisnews->video}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                @endif
    <div class="related_news">
   
        <form class="d-none" action="" method="post">
            <input type="text" name="" value="{{$thisnews->newsCode}}" id="">
        </form>
        <h2 class="noh">
            اخبار مرتبط
        </h2>
        <div class="r_n_links">
            <ul>
             
               
            </ul>
        </div>
    </div>
    <div class="comments">
        <h2 class="noh">نظرات</h2>
        <form class="cm_form" action="/save_comment-{{$thisnews->newsCode}}" method="POST" enctype="multipart/form-data">
            @csrf
            <textarea name="txt" id="" cols="30" rows="10" placeholder="متن را وارد کنید" required></textarea>
            <div class="c_f_inputs">
                <input type="text" name="name" id="" placeholder="لطفا نام خود را وارد کنید" required>
            <input type="number" name="phone" id="" placeholder="لطفا شماره موبایل خود را وارد کنید" required>
            </div>
            
            <input type="submit" class="btn btn-success" value="ارسال">
        </form>
        <div class="likethisnews">
        <i class="he fa fa-heart-o"></i>
            <button class="clicktolike">پسندیدن</button>
        </div>
        <button class="showcomments">
                 نظرات  {{$thisnews->comments()->where('status' , 1)->count()}}
             <i class="showbtnicon fa fa-angle-double-left"></i>
        </button>

        <button class="d-none hidecomments">
                 نظرات    {{$thisnews->comments()->where('status' , 1)->count()}} 
             <i class="showbtnicon fa fa-angle-double-left"></i>
        </button>
        <div class="newsesComments">
            @if( $thisnews->comments()->where('status' , 1)->count() > 0)
                @foreach($comments as $comment)
                    <div class="eachnewscomment">
                    <b>{{$thisnews->comments()->get()->name}}</b>
                    <p>{{$thisnews->comments()->get()->comment}}</p>
                    </div>
                @endforeach
                @else
                <div class="eachnewscomment">
                    <b>ادمین</b>
                    <p>کامنتی برای این پست ثبت نشده است</p>
                </div>
                @endif
    

 
                

        </div>
     
    </div>
@endsection
@section('smal_main_body')
@include('include._leftAdds')
@section('js')
<script src="{{url('/')}}/websitepages/assets/js/eachNews.js"></script>
<script>
    $(".clicktolike").click(()=>{
        $('.he').removeClass("fa-heart-o");
        $('.he').addClass("fa-heart heart");
        var cou = parseInt($(".heart").siblings("b").text());
        cou+=1;
        $(".heart").siblings("b").text(cou);
        alert("ممنون از لایک شما !")
    })
</script>
<script>
    $(".showcomments").click(()=>{
        $(".newsesComments").removeClass("height0");
        $(".newsesComments").removeClass("backheight");
        $(".showbtnicon").removeClass("fa fa-angle-double-left");
        $(".showbtnicon").addClass("fa fa-angle-double-down");
        $(".newsesComments").addClass("newheight");
        setTimeout(() => {
            $(".newsesComments").removeClass("newheight");
            $(".newsesComments").addClass("backheight");
            $(".showcomments").addClass("d-none");
            $(".hidecomments").removeClass("d-none");
        }, 1100);  

    })
    $(".hidecomments").click(()=>{
        $(".showbtnicon").removeClass("fa fa-angle-double-down");
        $(".showbtnicon").addClass("fa fa-angle-double-left");
            $(".newsesComments").removeClass("newheight");
            $(".newsesComments").addClass("height0");
            $(".showcomments").removeClass("d-none");
            $(".hidecomments").addClass("d-none");
         
    })

  

</script>
@endsection
@endsection

