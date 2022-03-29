$(document).ready(function(){
         //-- Click on detail
         $("ul.menu-items > li").on("click",function(){
             $("ul.menu-items > li").removeClass("active");
             $(this).addClass("active");
         })

         $(".attr,.attr2").on("click",function(){
             var clase = $(this).attr("class");

             $("." + clase).removeClass("active");
             $(this).addClass("active");
         })

         //-- Click on QUANTITY
         $(".btn-minus").on("click",function(){
             var now = $(".section > div > input").val();
             if ($.isNumeric(now)){
                 if (parseInt(now) -1 > 0) { $(".section > div > input").val(--now);}
             }else{
                 $(".section > div > input").val("1");
             }
         })
         $(".btn-plus").on("click",function(){
             var now = $(".section > div > input").val();
             if ($.isNumeric(now)){
                 if (parseInt(now) +1 == 1) { $(".section > div > input").val(++now);}
                 else {alert("Sorry, you can only attend yourself!");}
             }else{
                 $(".section > div > input").val("1");
             }
         })
     })

     function openTab(evt, name) {
       // Declare all variables
       var i, tabcontent;

       // Get all elements with class="menu-content" and hide them
       tabcontent = document.getElementsByName("menu-content");
       for (i = 0; i < tabcontent.length; i++) {
         tabcontent[i].style.display = "none";
       }

       // Show the current tab, and add an "active" class to the button that opened the tab
       document.getElementById(name).style.display = "";
     }
