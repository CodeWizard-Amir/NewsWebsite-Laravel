@extends('extends.adminclun')
@section('css')
<link rel="stylesheet" href="{{url('/')}}/Dashboard/assets/css/p_addNews.css">
@endsection
@section('body')
    <div class="main_body">
        <h2>
            اضافه کردن خبر جدید
        </h2>
        <form class="add_news_form" action="/updatemynews{{$my_news->newsCode}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="newsCode" value="{{$my_news->newsCode}}">
            <input type="text" name="title" id="" value="{{$my_news->titleOfnews}}" placeholder="تیتر خبر">
            <textarea value="{{$my_news->summeryOfnews}}" placeholder="خلاصه خبر" name="summery" id="" cols="30" rows="10">{{$my_news->summeryOfnews}}</textarea>
            <label for="pic">عکس خبر رو آپلود کن</label>
            <input type="file" name="picture" id="pic">
            <label for="video">ودیو رو آپلود کن</label>
            <input type="file" name="video" id="video">
            <input value="{{$my_news->imgaltOfnews}}" type="text" name="altpicture" id="" placeholder="درباره عکس">
            <select name="category" id="">
                <option value="" selected disabled>دسته بندی را انتخاب کنید</option>
                @foreach($categories as $category)
                    <option value="{{$category->cat_code}}">{{$category->category}}</option>
                @endforeach
            </select>
            <select name="position" id="">
                <option value="" disabled selected>موقعیت خبر</option>
                <option value="0">عادی</option>
                <option value="1">صفحه اصلی</option>
            </select>
            <textarea value="{{$my_news->bodyOfnews}}" class="" id="myEditor" name="body" id="" cols="30" rows="10" placeholder="متن خبر">{{$my_news->bodyOfnews}}</textarea>
            <input type="submit" class="btn btn-danger" value="ذخیره">

        </form>
    </div>
</body>
@section('js')
<script>
    ClassicEditor
		.create( document.querySelector( '#myEditor' ), {
               language: 'fa',
			//  toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
      


    </script>
@endsection

@endsection