jQuery(document).ready(function(){
	jQuery('.deploy-left-sidebar, .close-sidebar-left, .close-bottom-left, .close-bottom-right, .deploy-subscribe-form, .deploy-contact-form').click(function(){	return false;	})
   
    jQuery(".deploy-left-sidebar").click(function(){
        jQuery('.sidebar-left').delay(300).animate({
            left: '0',
        }, 300, 'easeOutExpo', function () {});
        jQuery('.sidebar-right').animate({
            right: '-280px',
        }, 300, 'easeInOutExpo', function () {});
        return false;
    });


    jQuery(".close-sidebar-left, .close-bottom-left").click(function(){        
        jQuery('.sidebar-left').animate({
            left: '-270px',
        }, 300, 'easeInOutExpo', function () {});
        return false;
    });
});
