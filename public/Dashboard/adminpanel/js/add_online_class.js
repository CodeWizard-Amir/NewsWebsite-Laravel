$('document').ready(function(){

     $(".add_input").click(function(){
          var count = parseInt($("#counter").val());
          count+=1;
          var input = "<input type='text' name="+'name'+count+"  placeholder='نام مبحث'>";
          $(".items_form").append(input);
          $("#counter").val(count)
     })

     $(".add_input_tag").click(function(){
          var count = parseInt($("#counter_tag").val());
          count+=1;
          var input = "<input type='text' name="+'name'+count+"  placeholder='نام برچسب'>";
          $(".tag_form").append(input);
          $("#counter_tag").val(count)
     })


})
