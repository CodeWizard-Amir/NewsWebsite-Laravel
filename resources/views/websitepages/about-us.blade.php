@extends('extends.headerFooter')
@section('css')
<link rel="stylesheet" href="{{url('/')}}/websitepages/assets/css/about-us.css">
<link rel="stylesheet" href="{{url('/')}}/websitepages/assets/css/aboutmediscreen.css">
@endsection
@section('body')
<div class="main_about_us">
        <h2>
            درباره ما
        </h2>
        @if(!is_null($about))
            {!! $about->text !!}
        @else
            <p>هنوز متنی درج نشده است</p>
        @endif

    </div>
@endsection
@section('js')
@endsection