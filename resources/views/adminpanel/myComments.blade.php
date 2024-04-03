@extends('extends.adminclun')
@section('css')
<link rel="stylesheet" href="{{url('/')}}/Dashboard/assets/css/comments.css">
@endsection
@section('body')
<div class="main_body">
    @foreach($comments as $comment)
        <div class="eachComment">
            <span>نام : <b>{{$comment->name}}</b></span>
            <span>شماره موبایل : <b>{{$comment->phone_number}}</b></span>
            <span>کامنت : {{$comment->comment}}</span>
            <form action="/okcomment" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="code" value="{{$comment->id}}" id="">
                <input type="submit" class=" mt-4 btn btn-success" value="حله !">
            </form>
        </div>
    @endforeach

</div>

@endsection
@section('js')

@endsection