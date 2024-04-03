$(document).ready(()=>{
    
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    $(window).on('load' ,function (e){
        e.preventDefault()
        var myform = $("#viewControl");
        $.ajax({
          url: "/viewCounter/"+$(".codeOfnews").children("b").text(),
          data: myform.serialize(),
          type: 'POST',
    });
    })
    $(".cm_form").submit(function (e){
        e.preventDefault()
        var myform = $(".cm_form");
        $.ajax({
          url: $(this).attr('action'),
          data: myform.serialize(),
          type: 'POST',
          success: function (e) {
            Swal.fire({
                icon: 'success',
                title: 'ادمین',
                text: '  نظر شما با موفقیت ثبت شد',
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
    $(".clicktolike").click(()=>{
      var myform = $("#likeControl");
      $.ajax({
        url: "/likeControl/"+$(".codeOfnews").children("b").text(),
        data: myform.serialize(),
        type: 'POST',
  });
    })
})
