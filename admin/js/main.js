$(document).ready(function(){
    
    // Menu Bar
    var resMenu = false;
    $(".menu-bar i").click(function(){
       if(resMenu == false){
           $(".sidebar").addClass("position");
           resMenu = true;
        }else{
           $(".sidebar").removeClass("position");
           resMenu = false;
        }
    });
    $(window).scroll(function(){
      if($(this).scrollTop() > 50){
        $("nav.navbar.navbar-expand").css({"background-color":"#000"});
      }else{
        $("nav.navbar.navbar-expand").css({"background-color":"rgba(0, 0, 0, .2)"});
      }
    });
});