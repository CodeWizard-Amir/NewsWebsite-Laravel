@extends('extends.adminclun')
@section('css')
<link rel="stylesheet" href="{{url('/')}}/Dashboard/assets/css/p_slider.css">
@endsection
@section('body')
<div class="main_body">
    @if(session('mt'))
        <p id="mdd" class="md alert alert-success">عملیات با موفقیت انجام شد</p>
    @endif
    @if(session('rt'))
        <p id="bdd" class="alert alert-success">عملیات با موفقیت انجام شد</p>
    @endif
  
        <h2>
            اسلایدر ها
        </h2>
        <form class="taksliderform"
        action="/savetalslider" method="POST" enctype="multipart/form-data">
        @csrf
            <h4>تبلیغات تک عکس</h4>
            <input type="file" name="img" id="">
            <input type="text" name="imgalt" id="" placeholder="درباره عکس">
            <select name="position" id="">
                <option disabled selected>موقعیت تصویر</option>
                <option value="0">بالایی</option>
                <option value="1">پایینی</option>
            </select>
            <input type="submit" class="btn btn-danger" value="ذخیره">
        </form>
        <br>
        <form action="/savemultislider" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="hidden" id="counter" value="1">
            <h4>تبلیغات اسلایدری</h4>
            <div class="r">
                <div class="inp">
                    <input type="file" name="img1" id="" required>
                    <input type="text" name="imgalt1" id="" placeholder="درباره عکس" required>
                    <select name="position" >
                        <option value="" selected disabled>موقعیت تصویر</option>
                        <option value="0">بالایی</option>
                        <option value="1">پایینی</option>
                    </select>
                </div>
            </div>
    
     
            <span class="addinp btn btn-warning">اضافه کردن عکس</span>
            <input type="submit" class="btn btn-danger" value="ذخیره">
        </form>
    </div>
@endsection
@section('js')
    <script>
        $(".addinp").click(()=>{
            var count = parseInt($("#counter").val());
            count+=1;
            var inp = '<div class="inp">'+
                '<input type="file" name="img'+count   +'" id="" required>'+
                '<input type="text" name="imgalt'+count   +'" id="" placeholder="درباره عکس" required>'+
                '<select name="position" >'+
                    '<option value="" selected disabled>موقعیت تصویر</option>'+
                    '<option value="0">بالایی</option>'+
                    '<option value="1">پایینی</option>'+
                '</select>'+
            '</div>';
            $("#counter").val(count)
            $(".r").append(inp);
        })
    </script>
    <script>
        setTimeout(() => {
            document.getElementById("bdd").style.display='none';
        }, 2500);
        setTimeout(() => {
            document.getElementById("mdd").style.display='none';
        }, 2500);
       
    </script>
@endsection