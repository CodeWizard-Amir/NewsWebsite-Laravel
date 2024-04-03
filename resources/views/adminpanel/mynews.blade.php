@extends('extends.adminclun')
@section('metas')
  <meta name="robots" content=" index , follow ">
@endsection
@section('css')
<link rel="stylesheet" href="{{url('/')}}/Dashboard/assets/css/p_myNews.css">
@endsection
@section('body')
<div class="main_body">
        <h2>
            خبر های منتشر شده
        </h2>
        @if(session('success'))
            <p id="mgsuc" class="alert alert-success">خبر با موفقیت آپدیت شد !</p>
        @endif
    
        <div class="allnews row">
            @foreach($newses as $news)
            <div class="each_news">
                <img src="{{url('/')}}/{{$news->imgOfnews}}" alt="">
                <h3>
                    {{$news->titleOfnews}}
                </h3>
                <p>
                {{$news->summeryOfnews}}

                </p>
                <form class="d-inline mr-4" action="/editenews/{{$news->newsCode}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="submit" class="btn btn-warning" value="ویرایش">
                </form>
                <button class="del btn btn-danger">حذف</button>
                <form id="delform" class="d-none mr-4" action="/delnews-{{$news->newsCode}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="submit" class="btn btn-warning" value="ویرایش">
                </form>
            </div>
            @endforeach
        </div>
    </div>
@endsection
@section('js')
<script>
    $(".del").click(()=>{
 
        Swal.fire({
        title: 'آیا مطمینی میخوای این خبر رو حذفش کنی؟؟',
        showDenyButton: true,
        confirmButtonText: 'دست نگه دار!',
        denyButtonText: `حذف کن`,
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire('عملیات حذف کنسل شد!', '', 'info')
        } else if (result.isDenied) {

            Swal.fire({
              icon: 'success',
              title: 'ادمین',
              text: '  خبر با موفقیت حذف شد',
              showConfirmButton: false,
          });
          setTimeout(() => {
            $("#delform").submit();
        }, 200);
           
        }
        })
    })
</script>
<script>
            setTimeout(() => {
            document.getElementById("mgsuc").style.display='none';
        }, 2500);
</script>
@endsection

