$('document').ready(function(){

     $(".add_input").click(function(){
          var count = parseInt($("#counter").val());
          count+=1;
          var input = "<input type='text' name="+'tag_name'+count+"  placeholder='نام برچسب'>";
          $(".tag_form").append(input);
          $("#counter").val(count)
     })


})