<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('/')}}/websitepages/assets/css/mdb.rtl.min.css">
    <link rel="stylesheet" href="{{url('/')}}/Dashboard/adminpanel/css/Admin_login.css">
</head>
<style>
</style>
<body>
@if(session('error'))
                <p style="font-family: 'BRoya';" id="nok" class=" d-center alert alert-danger">نام کاربری یا پسوورد اشتباه است</p>
                @endif
    <div class="kol">
    
        <div class="form1 col-12 col-md-5">
            
            <form action="/accessToDashboard" method="POST" enctype="multipart/form-data">
            @csrf
                <h1>ورود</h1>
            
                
                <input type="text" name="name" id="name" placeholder="نام کاربری">

                <input type="password" name="password" id="password" placeholder="پسورد">

                <input type="submit" value="ورود">
            </form>
        </div>
        <div class="text col-12 col-md-7">
            <p>
                    جهت ورود نام کاربری و پسوورد خود را وارد کنید
            </p>
      
            
        </div>


    </div>
    <script>
        setTimeout(() => {
            document.getElementById("nok").style.display='none';
        }, 2500);
    </script>
</body>
</html>