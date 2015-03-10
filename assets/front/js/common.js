$(document).ready(function(){

    $(".custom-select").each(function(){
        $(this).wrap("<span class='select-wrapper'></span>");
        $(this).after("<span class='holder'></span>");
    });

    $(".custom-select").change(function(){
        var selectedOption = $(this).find(":selected").text();
        $(this).next(".holder").text(selectedOption);
        }).trigger('change');


        $('.selectpicker').selectpicker();

        $(".reserver_con") .click(function(){
            $(".reserver_top_form") .slideToggle("slow");
        });

        $(".reserver_con_footer") .click(function(){
            $(".reserver_top_form") .slideToggle("slow");
        });


    $(window).scroll(function() {

        if ($(window).scrollTop() > 120) {
            $('.main_h').addClass('sticky');
        } else {
            $('.main_h').removeClass('sticky');
        }
    });


    $(window).scroll(function() 
    {

        if($(window).width() >= 320)
        {
            if ($(window).scrollTop() > 120 && $(this).scrollTop() < 3999) 
            {
                $('.main_h').addClass('sticky');
                $('.main_h').css("display","block");
                $('.main_h_footer').css("display","none");
            } 
            else
            if($(this).scrollTop() > 4000) 
            {
                $('.main_h').removeClass('sticky');  // for header
                $('.main_h').css("display","none");  // for header

                $('.main_h_footer').addClass('stickyfooter');   // for footer
                $('.main_h_footer').css("display","block"); // for footer
                
            }
            else
            {
                $('.main_h').removeClass('sticky');
            }
        }
      
    });




    // Mobile Navigation
    $('.mobile-toggle').click(function() {
        if ($('.main_h').hasClass('open-nav')) {
            $('.main_h').removeClass('open-nav');
        } else {
            $('.main_h').addClass('open-nav');
        }
    });

    $('.main_h li a').click(function() {
        if ($('.main_h').hasClass('open-nav')) {
            $('.navigation').removeClass('open-nav');
            $('.main_h').removeClass('open-nav');
        }
    });

    // navigation scroll lijepo radi materem
    $('nav a').click(function(event) {
        var id = $(this).attr("href");
        var offset = 70;
        var target = $(id).offset().top - offset;
        $('html, body').animate({
            scrollTop: target
        }, 500);
        event.preventDefault();
    });

    jQuery('li.mob_activity_parent').click(function(){
        jQuery('li.mob_activity_parent').removeClass('active');
        jQuery(this).addClass('active');
    });

});


//Language Switcher
function change(lang) {

    $.ajax({

        'url'       : 'language',
        'action'    : 'POST',
        'data'      : {locale:lang},
        'success'   : function(result){
//            window.data = result;

//            console.log(window.data.events[0].event_title);
           location.reload();

        },
        'error'     : function(){
            console.log('Some error occurred');
        }
    });
}


/*
 {{ URL::to('/') }}/*/