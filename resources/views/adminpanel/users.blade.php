@extends('extends.adminclun')
@section('css')
<link rel="stylesheet" href="{{url('/')}}/Dashboard/assets/css/p_users.css">
@endsection
@section('body')
<div class="main_body">
        <h2>
            عضو های سایت
        </h2>
        <form class="user_form_search" action="/searchUser" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="text" id="" placeholder="نام ، شماره یا ایمیل را وارد کنید">
            <input type="submit" class="btn btn-primary" value="جستجو">
        </form>
        @if(session('message'))
            <div class="each_user has_searched">
                <ul>
                    <li>نام : <b>{{session('myuser')->name}}</b></li>
                    <li>شماره : <b>{{session('myuser')->p_number}}</b></li>
                    <li>ایمیل : <b>{{session('myuser')->email}}</b></li>
                </ul>  
            </div>
        @endif
        @if(session('message2'))
            <p class="alert alert-danger mt-3 mb-2">کاربری با این مشخصات یافت نشد</p>
        @endif
        
        <div class="users">
            @foreach($newsLetters as $newsLetter)
            <div class="each_user">
                <ul>
                    <li>نام : <b>{{$newsLetter->name}}</b></li>
                    <li>شماره : <b>{{$newsLetter->p_number}}</b></li>
                    <li>ایمیل : <b>{{$newsLetter->email}}</b></li>
                </ul>  
            </div>
            @endforeach
    
        </div>
    </div>
@endsection
