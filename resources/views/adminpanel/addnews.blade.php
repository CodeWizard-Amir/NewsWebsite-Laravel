@extends('extends.adminclun')
@section('css')
<style>
    .error{
        color: red;
    }
</style>
<link rel="stylesheet" href="{{url('/')}}/Dashboard/assets/css/p_addNews.css">
@endsection
@section('body')
    <div class="main_body">
        @if(session('msg'))
            <p id="mgsuc" class="alert alert-success">خبر با موفقیت ایجاد شد !</p>
        @endif
        <h2>
            اضافه کردن خبر جدید
        </h2>

        <form class="add_news_form" action="/make_news" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" id="" placeholder="تیتر خبر" required>
            <textarea placeholder="خلاصه خبر" name="summery" id="" cols="30" rows="10" required></textarea>
            <label for="pic">عکس خبر رو آپلود کن</label>
            <input type="file" name="picture" id="pic" required>
            <label for="video">ودیو رو آپلود کن</label>
            <input type="file" name="video" id="video">
            <input type="text" name="altpicture" id="" placeholder="درباره عکس" required>
            <select name="category" id="" required>
                <option value="" selected disabled>دسته بندی را انتخاب کنید</option>
                @foreach($categories as $category)
                    <option value="{{$category->cat_code}}">{{$category->category}}</option>
                @endforeach
            </select>
            <select name="position" id="" required>
                <option value="" disabled selected>موقعیت خبر</option>
                <option value="0">عادی</option>
                <option value="1">صفحه اصلی</option>
            </select>
            <textarea class="" id="myEditor" name="body" id="" cols="30" rows="10" placeholder="متن خبر" required></textarea>
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
        setTimeout(() => {
            document.getElementById("mgsuc").style.display='none';
        }, 2500);
      


    </script>
   <script>
            $('form').validate();
   </script>
@endsection

@endsection