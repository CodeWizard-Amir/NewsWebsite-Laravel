  // ____________________________________________________________________
  $(document).ready(()=>{

    $(".clicktomenu").click(()=>{
      $(".mds_ul").removeClass("hidenowul");
      $(".mds_ul").addClass("shownowul");
      $(".clicktomenu").addClass("dno")
      $(".closetomenu").removeClass("d-none");
      $(".closetomenu").removeClass("dno");
    })
    $(".closetomenu").click(()=>{
      $(".mds_ul").removeClass("shownowul");
      $(".mds_ul").addClass("hidenowul");
      $(".clicktomenu").removeClass("dno")
      $(".closetomenu").addClass("dno");
    })

    $("#userform").submit(function(e){
      e.preventDefault()
      var myform = $("#userform");
      $.ajax({
        url: $(this).attr('action'),
        data: myform.serialize(),
        type: 'POST',
        success: function (e) {
          Swal.fire({
              icon: 'success',
              title: 'تبریک',
              text: 'شما عضو جدید خبرنامه ما هستید!',
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
    // ////////////////////////////////////////////////////////////////////////////


    // //////////////////////////////////////////////////////////

    var swiper = new Swiper(".mySlider_add", {
      grabCursor: true,
      autoplay: {
          delay: 2500,
          disableOnInteraction: false,
          },
      effect: "creative",
      loop: true,
      creativeEffect: {
        prev: {
          shadow: true,
          translate: [0, 0, -400],
        },
        next: {
          translate: ["100%", 0, 0],
        },
      },
    }); 

    var swiper = new Swiper(".the_most_visited_slider", {
      effect: "coverflow",
      grabCursor: true,
      loop: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
   
    
  })