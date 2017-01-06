$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 500);
                 return false;
            }
        }
    });
    
    $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
        if(scroll >= $("#random").offset().top){
            $(".active").removeClass("active");
            $("#h3").addClass("active");
        } else if(scroll >= $("#features").offset().top){
            $(".active").removeClass("active");
            $("#h2").addClass("active");
        } else if(scroll >= $("#home").offset().top){
            $(".active").removeClass("active");
            $("#h1").addClass("active");
        }
        
        if(scroll != 0){
            // $("#header").css("background-color","rgba(163,41,41,0.6)");
            $("#header").css("background-color","rgba(80,80,80,0.7)");
        } else {
            $("#header").css("background-color","transparent");
        }
    });
   
    // $(".nav a").click(function() {
    //     $(".active").removeClass("active");
        
    //     $(this).parent().addClass("active");
    // });
});


    $(document).ready(function() {  
            $('.description_active').click(function(){  
                $(this).removeClass('description_active').val('');  
            });  
     });  