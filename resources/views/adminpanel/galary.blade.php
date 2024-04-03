@extends('extends.adminclun')
@section('css')
<link rel="stylesheet" href="{{url('/')}}/Dashboard/assets/css/galary.css">
@endsection
@section('body')
<div class="main_body">

     <form action="/savegalary" method="post" enctype="multipart/form-data">
     @csrf
          <label for="pic">لطفا عکس را اپلود کنید</label>
          <input type="file" name="pic">
          <input type="text" name="imgalt" id="">
          <input type="submit" value="ذخیره" class="btn btn-danger">
     </form>
     <div class="allpics row">
          @foreach($pic as $img)
               <img src="{{url('/')}}/{{$img->pic}}" alt="{{$img->imgalt}}">
          @endforeach
          
     </div>
</div>
@endsection