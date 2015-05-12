jQuery(function(){
	var currentWindowWidth = parseInt(jQuery(window).width());
	
	if (currentWindowWidth<1000) {
		jQuery('#wrapper').css({
			'width':'100%',
		});
		
		jQuery('#menu_sidebar').show();
		jQuery('#menu').hide();
		
		jQuery('#user').css({
			'width':'40%',
		});
	} else {
		jQuery('#wrapper').css({
			'width':'1000px',
		});
		
		jQuery('#menu_sidebar').hide();
		jQuery('#menu').show();
		
		jQuery('#user').css({
			'width':'20%',
		});
	}
	
	if (currentWindowWidth<600){
		jQuery('#home_art .item').css({
			'width':'98%',
			'margin-left:':'1%',
		});
		
		jQuery('#record .left').css({
			'width':'35%',
			'margin-left:':'1%',
		});
		
		jQuery('#record .right').css({
			'width':'60%',
			'margin-left:':'1%',
		});
		
		jQuery('#record .right .item .first .left2').css({
			'width':'30%',
			'height':jQuery('#record .right .item .first .right2').innerHeight()
		});
		
		jQuery('#record .right .item .first .right2').css({
			'width':'50%',
		});
	} else if (currentWindowWidth<800){
		jQuery('#home_art .item').css({
			'width':'48%',
			'margin-left:':'1%',
		});
		
		jQuery('#record .left').css({
			'width':'30%',
			'margin-left:':'1%',
		});
		
		jQuery('#record .right').css({
			'width':'65%',
			'margin-left:':'1%',
		});
		
		jQuery('#record .right .item .first .left2').css({
			'width':'20%',
			'height':jQuery('#record .right .item .first .right2').innerHeight()
		});
		
		jQuery('#record .right .item .first .right2').css({
			'width':'66%',
		});
	} else {
		jQuery('#home_art .item').css({
			'width':'32%',
			'margin-left:':'1%',
		});
		
		jQuery('#record .left').css({
			'width':'20%',
			'margin-left:':'1%',
		});
		
		jQuery('#record .right').css({
			'width':'75%',
			'margin-left:':'1%',
		});
		
		jQuery('#record .right .item .first .left2').css({
			'width':'10%',
			'height':jQuery('#record .right .item .first .right2').innerHeight()
		});
		
		jQuery('#record .right .item .first .right2').css({
			'width':'76%',
		});
	}
	
	
	
	jQuery(window).resize(function() {
		currentWindowWidth = parseInt(jQuery(window).width());
		
		if (currentWindowWidth<1000) {
			jQuery('#wrapper').css({
				'width':'100%',
			});
			
			jQuery('#menu_sidebar').show();
			jQuery('#menu').hide();
			
			jQuery('#user').css({
				'width':'40%',
			});
		} else {
			jQuery('#wrapper').css({
				'width':'1000px',
			});
			
			jQuery('#menu_sidebar').hide();
			jQuery('#menu').show();
			
			jQuery('#user').css({
				'width':'20%',
			});
		}
		
		if (currentWindowWidth<600){
			jQuery('#home_art .item').css({
				'width':'98%',
				'margin-left:':'1%',
			});
			
			jQuery('#record .left').css({
				'width':'35%',
				'margin-left:':'1%',
			});
			
			jQuery('#record .right').css({
				'width':'60%',
				'margin-left:':'1%',
			});
			
			jQuery('#record .right .item .first .left2').css({
				'width':'30%',
				'height':jQuery('#record .right .item .first .right2').innerHeight()
			});
			
			jQuery('#record .right .item .first .right2').css({
				'width':'50%',
			});
		} else if (currentWindowWidth<800){
			jQuery('#home_art .item').css({
				'width':'48%',
				'margin-left:':'1%',
			});
			
			
			jQuery('#record .left').css({
				'width':'30%',
				'margin-left:':'1%',
			});
			
			jQuery('#record .right').css({
				'width':'65%',
				'margin-left:':'1%',
			});
			
			jQuery('#record .right .item .first .left2').css({
				'width':'20%',
				'height':jQuery('#record .right .item .first .right2').innerHeight()
			});
			
			jQuery('#record .right .item .first .right2').css({
				'width':'66%',
			});
		} else {
			jQuery('#home_art .item').css({
				'width':'32%',
				'margin-left:':'1%',
			});
			
			jQuery('#record .left').css({
				'width':'20%',
				'margin-left:':'1%',
			});
			
			jQuery('#record .right').css({
				'width':'75%',
				'margin-left:':'1%',
			});
			
			jQuery('#record .right .item .first .left2').css({
				'width':'10%',
				'height':jQuery('#record .right .item .first .right2').innerHeight()
			});
			
			jQuery('#record .right .item .first .right2').css({
				'width':'76%',
			});
		}
	});
})