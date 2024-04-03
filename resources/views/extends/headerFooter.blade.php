<!DOCTYPE html>
<html lang="en">
<head>
    @yield('metas')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('metacontent')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('/')}}/websitepages/assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/websitepages/assets/css/mdb.rtl.min.css">
    <link rel="stylesheet" href="{{url('/')}}/websitepages/assets/css/animate.css">
    <link rel="stylesheet" href="{{url('/')}}/Dashboard/adminpanel/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/')}}/websitepages/assets/css/alert.css">
    <link rel="stylesheet" href="{{url('/')}}/websitepages/assets/css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/websitepages/assets/css/mediaScreen.css">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>

    <header>
 
        <div class="top_header">
            <div class="headerlyer"></div>

            <div class="logo">
               <img src="{{url('/')}}/websitepages/assets/css/my_images/logo.png" alt="mylogo">
            </div>
            <div class="serchbox">
                <form action="/searchnews" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="target" id="" placeholder="دنبال چی میگردی؟">
                    <button class="searchIcon" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <div class="dateToday">
             
                <span> {{verta('today')->format('Y-m-d')}} شمسی</span>
                <span> {{verta('today')->formatGregorian('Y-m-d')}} میلادی</span>
            </div>
        </div>
 
        <nav>
        <i class="d-none clicktomenu fa fa-bars"></i>
        <i class="d-none closetomenu fa fa-close"></i>
            <ul class="ulu">
                <li><a href="/">صفحه اصلی</a></li>
                <li><a href="/lastnews">آخرین اخبار</a></li>
                @foreach($cat_menu as $menu)
                    <li><a href="/news/{{$menu->cat_code}}/{{$menu->category}}">{{$menu->category}}</a></li>
                @endforeach
            </ul>
            <ul class="mds_ul">
                <li><a href="/">صفحه اصلی</a></li>
                <li><a href="/lastnews">آخرین اخبار</a></li>
                @foreach($cat_menu as $menu)
                    <li><a href="/news/{{$menu->cat_code}}/{{$menu->category}}">{{$menu->category}}</a></li>
                @endforeach
            </ul>
          
        </nav>
  
    </header>
    @yield('body')
    <!-- ____________ End Header ____________ -->
    <div class="main_body">
        <div class="big_main_body">
            @yield('big_main_body')
        </div>
        <div class="small_main_body">
            @yield('smal_main_body')
        </div>
    </div>
    <!-- ++_++_++_++_++_++_++_ End Main Body -->
    <div class="the_most_visited">
        <h2>
            پربازدید ترین اخبار
        </h2>

        <div class="swiper the_most_visited_slider">
            <div class="swiper-wrapper">
                @foreach($N_moreviwes as $N_moreviwe)
                
                <div class="swiper-slide" title="تاریخ و ساعت انتشار{{$N_moreviwe->created_at}}">
                <img src="{{url('/')}}/{{$N_moreviwe->imgOfnews}}" alt="{{$N_moreviwe->imgaltOfnews}}">
                <a href="/{{$N_moreviwe->newsCode}}/{{$N_moreviwe->link}}">
                <p class="sliderTextpoasb">{{$N_moreviwe->summeryOfnews}}</p>
                </a>
    
                </div>
         
                @endforeach
  
            </div>
            <div class="swiper-pagination"></div>
          </div>


    </div>
    <!-- End the most visited -->

    <!-- End the mos favorites -->
    <footer>
        <div class="blacklyer"></div>
        <div class="footerLinks">
            <h2>
                لینک های مفید
            </h2>
            <ul class="row">
                <li><a href="/about-us">درباره ما</a></li>
                <li><a class="suport" href="#">پشتیبانی</a></li>
                <li><a href="#" class="com_alert">نظرات و پیشنهادات</a></li>
            </ul>
        </div>
        <div class="beUser">
            <div class=""></div>
            <form id="userform" action="/saveUser" method="POST" enctype="multipart/form-data">
                @csrf
                <h2>عضویت در خبرنامه</h2>
                <div class="inputs">
                    <input type="text" name="name" id="" placeholder="لطفا نام خود را وارد کنید" require>
                    <input type="email" name="email" id="" placeholder="ایمیل" require>
                    <input type="number" name="p_number" placeholder="شماره موبایل" require>
                    <input type="submit" class="btn btn-danger" value="عضویت">
                </div>
            </form>
        </div>

        <div class="media">
            <h2>مارا در شبکه های اجتماعی دنبال کنید</h2>
            <div class="eachMedia row">
                <span><a  href="
                @if(!is_null($ins))
                    {{$ins->ip}}
                @endif
                " class="ins fa fa-instagram" target="_blank"></a></span>
                <span><a  href="
                @if(!is_null($tel))
                    {{$tel->ip}}
                @endif
                " class="tel fa fa-telegram" target="_blank"></a></span>
                <span><a  href="
                @if(!is_null($twe))
                    {{$twe->ip}}
                @endif 
                " class="twe fa fa-twitter" target="_blank"></a></span>
                <span><a  href="
                @if(!is_null($fac))
                    {{$fac->ip}}
                @endif
                " class="fac fa fa-facebook-f" target="_blank"></a></span>
            </div>
        </div>

    </footer>

    <div class="copyright">
    طراح و برنامه نویس امیرسجاد نوری  <span class="sajdins"><a  href="https://instagram.com/amirsajjad_nouri" target="_blank" class="ins fa fa-instagram"></a></span>
    </div>
    <div class="copyright">
        تمام حقوق مادی و معنوی این سایت متعلق به صدای شهروند است
    </div>
    <script src="{{url('/')}}/websitepages/assets/js/jquery-3.6.0.min.js"></script>
    <script src="{{url('/')}}/websitepages/assets/js/sweetalert2.all.min.js"></script>
    <script src="{{url('/')}}/websitepages/assets/js/swiper-bundle.min.js"></script>
    <script src="{{url('/')}}/websitepages/assets/js/wow.min.js"></script>
    <script src="{{url('/')}}/websitepages/assets/js/magic.js"></script>
    @yield('js')
    <script>
    $(".com_alert").click(()=>{
      swal.fire({
        title: 'ادمین',
        customClass: 'com_form_alert',
        icon: 'info',
        html:'<form id="com_form" class="com_form" action="/saveidea" method="POST" enctype="mulripart/form-data">'+
        '@csrf'+
        '<input type="text" name="name" id="" placeholder="لطفا نام خود را وارد کنید">'+
        '<input type="number" name="phone" id="" placeholder="شماره موبایل را وارد کنید">'+
        '<textarea name="text" id="" cols="30" rows="10" placeholder="نظرات و پیشنهادات"></textarea>'+
        '<input type="submit" class="btn btn-success" value="ثبت نظر">'+
        '</form>',
          
        showCloseButton: true,
        showConfirmButton: false,
      
      })
      $("#com_form").submit(function(e){
      e.preventDefault()
      var myform = $("#com_form");
      $.ajax({
        url: $(this).attr('action'),
        data: myform.serialize(),
        type: 'POST',
        success: function (e) {
          Swal.fire({
              icon: 'success',
              title: 'ادمین',
              text: 'نظر شما با موفقیت ثبت شد',
          });
      },
      error: function()
      {
        Swal.fire({
          icon: 'error',
          title: 'ادمین',
          text: 'متسفانه مشکلی پیش آمده!'+'دوباره امتحان کنید',
      });
      }
  });
    })
  
    })
    </script>

    <script>
            $(".suport").click(()=>{
                swal.fire({
                title: 'پشتیبانی',
                customClass: 'com_form_alert',
                icon: 'info',
                html:'<p> ادمین های سایت در اسرع وقت با شما تماس خواهند گرفت</p>'+
                '<form id="supform" class="com_form" action="/savesuporter" method="POST" enctype="mulripart/form-data">'+
                '@csrf'+
                '<input type="text" name="name" id="" placeholder="لطفا نام خود را وارد کنید">'+
                '<input type="number" name="phone" id="" placeholder="شماره موبایل را وارد کنید">'+
                '<textarea name="text" id="" cols="30" rows="10" placeholder="درخواست یا سوال خود را وارد کنید"></textarea>'+
                '<input type="submit" class="btn btn-success" value="ثبت">'+
                '</form>',
                    
                showCloseButton: true,
                showConfirmButton: false,

                })
                $("#supform").submit(function(e){
                    e.preventDefault()
                    var myform = $("#supform");
                    $.ajax({
                        url: $(this).attr('action'),
                        data: myform.serialize(),
                        type: 'POST',
                        success: function (e) {
                        Swal.fire({
                            icon: 'success',
                            title: 'ادمین',
                            text: 'نظر شما با موفقیت ثبت شد',
                        });
                    },
                    error: function()
                    {
                        Swal.fire({
                        icon: 'error',
                        title: 'ادمین',
                        text: 'متسفانه مشکلی پیش آمده!'+'دوباره امتحان کنید',
                    });
                    }
                });
                    })
                })
    </script>
</body>
</html>