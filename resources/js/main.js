$(document).ready(function(){

    $(window).scroll(function(){
        if($(window).scrollTop()){
            $("nav").addClass("black");
        }
        else{
            $("nav").removeClass("black");
        }
    
    });
    
    });
    
    function openNav(){
        document.getElementById("myNav").style.width ="100%" ;
    }
    
    function closeNav(){
        document.getElementById("myNav").style.width ="0%" ;
    }
    