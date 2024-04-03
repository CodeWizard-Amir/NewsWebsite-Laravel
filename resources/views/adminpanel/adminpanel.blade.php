@extends('extends.adminclun')
@section('title')
@endsection
@section('css')
<link rel="stylesheet" href="{{url('/')}}/Dashboard/assets/css/panel.css">
@endsection
@section('body')
<h2>نظرات و پیشنهادات</h2>
<div class="ideas row">
@foreach($ideas as $idea)
        <div class="eachidea">
            <div class="nameandnumber">
                <span>نام : <b>{{$idea->name}}</b></span>
                <span>شماره  : <b>{{$idea->phone}}</b></span>
            </div>
            <div class="text">
                {{$idea->text}}
            </div>
            <a class="ok btn btn-primary" href="/idea{{$idea->id}}">باشه !</a>
        </div>
    @endforeach
</div>
<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
<h2>درخواست های پشتیبانی</h2>
<div class="ideas row">
    @foreach($suporter as $suport)
        <div class="eachidea">
            <div class="nameandnumber">
                <span>نام : <b>  {{$suport->name}}</b></span>
                <span>شماره  : <b>  {{$suport->phone}}</b></span>
            </div>
            <div class="text">
                 {{$suport->text}}
            </div>
            <a class="ok btn btn-primary" href="/sup{{$suport->id}}">باشه !</a>
        </div>
    @endforeach
</div>
@endsection
@section('js')
@endsection