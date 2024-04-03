$('document').ready(function(){
    var opop = $("#h1").number();
    alert(opop);
})

$(".DeleteRequest").click(function (e){
    e.preventDefault()
    var t =  $(this).parents(".eachpart");
    // $(this).parents(".eachpart").parents(".eachrequester").addClass("fadeOut");
    var myform = document.getElementById("DeleteRequest");
    var fd = new FormData(myform);
    $.ajax({
      url: $(this).attr("action"),
      data: fd,
      cache: false,
      processData: false,
      contentType: false,
      type : "POST" ,
      
      success: function () {
        t.parents(".eachrequester").addClass("wow zoomOutUp ");
        setTimeout(function() { 
            t.parents(".eachrequester").addClass("d-none"); 
        }, 2000);
    
        Swal.fire({
            icon: 'success',
            title: 'ادمین',
            text: ' اطلاعات با موفقیت ثبت شد',
        }); 
       
    },
    error: function (res) {
        Swal.fire({
            icon: 'error',
            title: 'ادمین',
            text: 'متسفانه درخواست شما مقدور نمیباشد',
        });
        
    },
    

});


})