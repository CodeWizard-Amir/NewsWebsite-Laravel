@extends('extends.adminclun')
@section('css')
<link rel="stylesheet" href="{{url('/')}}/Dashboard/assets/css/statistics.css">
@endsection
@section('body')
<div class="mainbody row">
    <div class="eachItem">
        <span>اعضا <b>{{$User}}</b></span>
    </div>
    <div class="eachItem">
        <span>اخبار منتشر شده <b>{{$newscount}}</b></span>
    </div>
    <div class="eachItem">
        <span>تعداد کامنت ها <b>{{$comments}}</b></span>
    </div>
    <div class="eachItem">
        <span>تعداد تمام لایک های خبرها<b>{{$likecount}}</b></span>
    </div>
    <div class="eachItem">
        <span>تعداد تمام ویوهای خبرها <b>{{$viewcount}}</b></span>
    </div>
</div>

@endsection
@section('js')

@endsection
