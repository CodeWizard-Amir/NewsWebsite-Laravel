@extends('extends.adminclun')
@section('css')
<link rel="stylesheet" href="{{url('/')}}/Dashboard/assets/css/p_about.css">
@endsection
@section('body')
<div class="main_body">
        <h2>
            درباره ما
        </h2>

        <div class="about_text">
            @if(!is_null($about))
            {!! $about->text !!}
            @else
            <p>هنوز متنی درج نشده است</p>
            @endif
            <span class="btn btn-warning">ویرایش</span>
        </div>
        <form action="/saveabout" method="POST" enctype="multipart/form-data">
            @csrf
            <textarea id="editor" name="text" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn btn-danger mt-5" value="ذخیره"> 
            
        </form>


    </div>
@endsection
@section('js')
<script>
ClassicEditor
    .create( document.querySelector( '#editor' ), {
        language: 'fa'
    } )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
@endsection