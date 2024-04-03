$('document').ready(function(){

     $(".add_input").click(function(){
          var count = parseInt($("#counter").val());
          count+=1;
          var div_input = "<div class='skills_percent'>"+
          "<input type='text' name="+'skill_name'+count+" placeholder='نام مهارت'>"+
          "<input type='number' name="+'skill_percentage'+count+" placeholder='درصد'>"+
          "</div>";

          $(".skills_group").append(div_input);
          $("#counter").val(count)
     })


})