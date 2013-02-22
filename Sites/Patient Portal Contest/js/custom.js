jQuery(function($) {

var ww = document.body.clientWidth;

$(document).ready(function(){

	/*FIT VIDEOS STARTS*/
    jQuery("article").fitVids();
    /*FIT VIDEOS ENDS*/

    /* Small Screens Menu Slide Down/Up */
    jQuery("#topmenu-button").click(function(){
        jQuery("#small-screens-menu nav").slideToggle("slow");
        return false;
    });

    jQuery("a[class^='prettyPhoto']").prettyPhoto();

});

// Header on top at scroll

if( $(window).width() > 992 ) {
    // Large menu
    $(function(){
        var header = $('#pageheader'),
            pos = header.offset();
			headerHeight = header.outerHeight();
             $(window).scroll(function(){
               if($(this).scrollTop() > pos.top+header.height()+100 && header.hasClass('default')){
                    header.fadeOut('fast', function(){
                        $(this).removeClass('default').addClass('fixed').fadeIn('normal');
                        $('.header-placeholder').css('height', headerHeight).show();
                     });
                 } else if($(this).scrollTop() <= pos.top+110 && header.hasClass('fixed')){
                    $('.header-placeholder').hide();
                    header.removeClass('fixed').addClass('default').show();
                 }
             });
        });
    $('#main').css('min-height', $('#sidebar').outerHeight());
    }

});