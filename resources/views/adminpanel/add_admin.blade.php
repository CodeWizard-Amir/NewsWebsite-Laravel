@extends('extends.adminclun')
@section('css')
<link rel="stylesheet" href="{{url('/')}}/Dashboard/assets/css/add_admin.css">
@endsection
@section('body')
<div class="divManager">
    @if(session('bbg'))
        <p id="bbg" class="alert alert-success">ادمین با موفقیت حذف شد</p>
    @endif
    <button class="formme btn btn-warning">ویرایش خودم</button>
    <form  class="d-none editme" action="savemeyes" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="" placeholder="نام" require>
        <input type="text" name="family" id="" placeholder="نام خانوادگی">
        <input type="text" name="number" id="" placeholder="شماره موبایل">
        <input type="text" name="email" id="" placeholder="email">
        <input type="text" name="password" id="" placeholder="password">
        <select name="sadmin" id="">
            <option value="sadmin" disabled selected> ادمین مورد نظر</option>
            @foreach($supers as $super)
            <option value="{{$super->id}}">{{$super->name}}</option>
            @endforeach
        </select>
        <input class="btn btn-success" type="submit" value="ذخیره">
    </form>
    <br>
    <form action="save_admin" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="" placeholder="نام" require>
        <input type="text" name="family" id="" placeholder="نام خانوادگی">
        <input type="text" name="number" id="" placeholder="شماره موبایل">
        <input type="text" name="email" id="" placeholder="email">
        <select name="role" id="">
            <option value="" disabled selected>نقش ادمین</option>
            <option value="0">ادمین عادی</option>
            <option value="1">سوپر ادمین</option>
        </select>
        <input type="text" name="password" id="" placeholder="password">
        <input class="btn btn-danger" type="submit" value="ذخیره">
    </form>
    <div class="my_admin">
        @foreach($User as $User)
        <ul>
            <li>نام : <b>{{$User->name}}</b></li>
            <li>نام خانوادگی : <b>{{$User->family}}</b></li>
            <li>شماره موبایل : <b>{{$User->phone_number}}</b></li>
            <li>پسوورد : <b>{{decrypt($User->password)}}</b></li>
            <button class="deladmin btn btn-danger">حذف</button>
        </ul>
        <form id="delform" class="d-none" action="/delmyadmin" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$User->id}}">
            <input type="submit" value="save">
        </form>
        @endforeach


    </div>
</div>
@endsection
@section('js')
<script>
    $(".deladmin").click(()=>{
 
        Swal.fire({
        title: 'آیا مطمینی میخوای این خبر رو حذفش کنی؟؟',
        showDenyButton: true,
        confirmButtonText: 'دست نگه دار!',
        denyButtonText: `حذف کن`,
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire('عملیات حذف کنسل شد!', '', 'info')
        } else if (result.isDenied) {
            setTimeout(() => {
            $("#delform").submit();
            }, 200);  
        }

        })
    })
    setTimeout(() => {
            document.getElementById("bbg").style.display='none';
        }, 2500);
</script>
<script>
    $(".formme").click(()=>{
        $(".editme").removeClass("d-none");
    })
</script>

@endsection