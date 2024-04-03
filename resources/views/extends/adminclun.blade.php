<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>پنل مدیریت | داشبورد اول</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{url('/')}}/Dashboard/adminpanel/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('/')}}/Dashboard/adminpanel/admin/css/adminlte.min.css">
  <link rel="stylesheet" href="{{url('/')}}/Dashboard/adminpanel/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="{{url('/')}}/Dashboard/adminpanel/plugins/morris/morris.css">
  <link rel="stylesheet" href="{{url('/')}}/Dashboard/adminpanel/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="{{url('/')}}/Dashboard/adminpanel/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="{{url('/')}}/Dashboard/adminpanel/plugins/daterangepicker/daterangepicker-bs3.css">
  <link rel="stylesheet" href="{{url('/')}}/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{url('/')}}/Dashboard/adminpanel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="{{url('/')}}/Dashboard/adminpanel/admin/css/bootstrap-rtl.min.css">
  <link rel="stylesheet" href="{{url('/')}}/Dashboard/adminpanel/admin/css/custom-style.css">
  <link rel="stylesheet" href="{{url('/')}}/websitepages/css/animate.min.css">
  @yield('css')
  <style>

html , body{
  font-family: 'BRoya' !important;
}

  .bg-purple{
      background: purple !important;
      color:white !important;
  }
    .bg-pinky{
    background: rgb(68, 0, 17);
    color: white;
    }
    .sidebar{
      font-size: 15px !important;
    }
  .job_request_counter{
    float: left;
    font-weight: 500;
    color: rgb(0, 255, 234);
    padding: 0px 10px;
    border-radius: 100px;
    border-bottom: 2px solid rgb(41, 175, 0);
}   
    .abs{
        margin-right:260px;
        height: auto;
        width: auto;
    }
    .info>a{
      font-size: 25px;
      margin-top: 7%;
    }
    .image>img{
      width:60px;
      height: 60px;
    }
    .CoT{
      width: 20px;
      height: 20px;
      font-size: 13px;
      padding: 0;
      border-radius: 100%;
    }
  </style>

</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
   
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">خانه</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">تماس</a>
      </li>
    </ul>
  </nav>
  <!--navbar -->

  <!-- **************************************************************************************** -->

  <!-- Main Sidebar Container -->
  <div class="badane">
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <span class="brand-text font-weight-light">صفحه اصلی</span>
    </a>

    <!-- Sidebar -->

    <div class="sidebar" style="direction: ltr">
      <div style="direction: rtl">
    
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block">{{auth()->user()->name}}</a>
          </div>
        </div>

  
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview menu-open">
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="panel" class="nav-link active bg-warning">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>داشبورد اصلی</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="add_admin" class="nav-link active bg-primary">
                    <i class="fa fa-plus nav-icon"></i>
                    <p>اضافه کردن ادمین</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="statistics" class="nav-link active  bg-danger">
                    <i class="fa fa fa-area-chart nav-icon"></i>
                    <p>آمار سایت</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link active mediamind  bg-primary">
                    <i class="fa fa fa-area-chart nav-icon"></i>
                    <p>شبکه های اجتماعی</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link active alert_category  bg-danger">
                    <i class="fa fa fa-area-chart nav-icon"></i>
                    <p>اضافه کردن دسته بندی خبر</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="mycomments" class="nav-link active  bg-primary">
                    <i class="fa fa fa-area-chart nav-icon"></i>
                    <p>کامنت ها</p>
                  </a>
                </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>
                    عضو ها
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="users" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>عضو های خبرنامه</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>
                   صفحات
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="addnews" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>اضافه کردن خبر</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="fixaboutus" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>درباره ما</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="galary" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>گالری تصاویر</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="addslider" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>تبلیغات سایت</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  
                   درباره خبرها
                  <i class="fa fa-angle-left right"></i>
   
                </p>
              </a>
              <ul class="nav nav-treeview">
                  
                <li class="nav-item">
                    <a href="mynews" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>خبرهای منتشر شده</p>
                     
                      <span class="job_request_counter">{{$countnews->count()}}</span>
            
                    </a>
                  </li>

               </ul>



            <li class="nav-header">out services</li>

  
   


            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-plus-square-o"></i>
                <p>
                  بیشتر
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/404.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ارور 404</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/500.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ارور 500</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/blank.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>صفحه خالی</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="starter.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>صفحه شروع</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>

        </nav>

      </div>
    </div>




  </aside>
  <div class="abs col-12 col-md-10">
    @yield('body')
</div>


  </div>


    
      
          <select name="" id="">
            <option value="">شبکه را انتخاب کنید</option>
            <option value="">انیستاگرام</option>
            <option value="">توییتر</option>
            <option value="">تلگرام</option>
            <option value="">فیسبوک</option>
          </select>
            
        
  <footer class="main-footer">
  </footer>

</div>

<script src="{{url('/')}}/publicFiles/js/jquery-3.6.0.min.js"></script>
<script src="{{url('/')}}/publicFiles/js/wow.min.js"></script>
<script>$.widget.bridge('uibutton', $.ui.button)</script>
<script src="{{url('/')}}/websitepages/assets/js/sweetalert2.all.min.js"></script>
<script src="{{url('/')}}/Dashboard/adminpanel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('/')}}/Dashboard/adminpanel/plugins/morris/morris.min.js"></script>
<script src="{{url('/')}}/Dashboard/adminpanel/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="{{url('/')}}/Dashboard/adminpanel/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{url('/')}}/Dashboard/adminpanel/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{url('/')}}/Dashboard/adminpanel/plugins/knob/jquery.knob.js"></script>
<script src="{{url('/')}}/Dashboard/adminpanel/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{url('/')}}/Dashboard/adminpanel/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="{{url('/')}}/Dashboard/adminpanel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="{{url('/')}}/Dashboard/adminpanel/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="{{url('/')}}/Dashboard/adminpanel/plugins/fastclick/fastclick.js"></script>
<script src="{{url('/')}}/Dashboard/adminpanel/admin/js/adminlte.js"></script>
<script src="{{url('/')}}/Dashboard/adminpanel/admin/js/pages/dashboard.js"></script>
<script src="{{url('/')}}/Dashboard/adminpanel/admin/js/demo.js"></script>
<script src="{{url('/')}}/Dashboard/assets/js/ckEditor.js"></script>
<script src="{{url('/')}}/Dashboard/assets/js/validator.js"></script>

@yield('js')
<script>
      new WOW().init();
    </script>
    <script>
      $(".mediamind").click(()=>{
        swal.fire({
        title: 'ادمین',
        icon: 'info',
        html:'<form style="width:100%" action="/savemedia" method="POST">'+
        '@csrf'+
        '<input styel="width:120px;" type="text" name="ip" id="" placeholder="آدرس شبکه اجتماعی را وارد کنید">'+
        '<br/>'+
        '<select name="position" id="">'+
            '<option value="">شبکه را انتخاب کنید</option>'+
          '  <option value="0">انیستاگرام</option>'+
           ' <option value="1">توییتر</option>'+
            '<option value="2">تلگرام</option>'+
            '<option value="3">فیسبوک</option>'+
          '</select>'+
        '<input type="submit" class="btn btn-success" value="ذخیره">'+
        '</form>',
          
        showCloseButton: true,
        showConfirmButton: false,
      
      })
      })
    </script>
    <script>
        $(".alert_category").click(()=>{
        swal.fire({
        title: 'ادمین',
        icon: 'info',
        html:' <form class="cat_form" action="/save_category" method="POST" enctype="mutipart/form-data">'+
        '@csrf'+
        '<input type="text" name="category" placeholder="لطفا نام دسته بندیرا وارد کنید" required>'+
        '<input type="submit" value="ذخیره" class="btn btn-warning">'+
        '</form>',
          
        showCloseButton: true,
        showConfirmButton: false,
      
      })
      })
    </script>
           
            <h2>دسته بندی جدید</h2>
            <br>
            @csrf
            
            


</body>
</html>
