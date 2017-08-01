/*
	Dopetrope 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

window._skel_config = {
	preset: 'standard',
	prefix: 'css/style',
	resetCSS: true,
	breakpoints: {
		'desktop': {
			grid: {
				gutters: 50
			}
		}
	}
};

window._skel_panels_config = {
	preset: 'standard'
};

jQuery(function() {
	$('#nav > ul').dropotron({ 
		offsetY: -17,
		offsetX: -1,
		mode: 'fade',
		noOpenerFade: true,
		detach: false
	});
	// Articles page
	$('.moreArticle').click(function(){
		$(this).parents('.singleArticle').removeClass('6u').addClass('12u');//make it full width
		$(this).siblings('.extra_info').show();//show the extra text
		$('.singleArticle').not($(this).parents('.singleArticle')).hide();//hide the other articles
		$(this).hide();//hide the more button
		$(this).siblings('.minimize_article').show();//show the minimize button
	});
	$('.minimize_article').click(function(){
		$(this).parents('.singleArticle').removeClass('12u').addClass('6u');//make it half width
		$(this).siblings('.extra_info').hide();//hide the extra text
		$('.singleArticle').show(300);//show the other articles
		$(this).hide();//hide the minimize button
		$(this).siblings('.moreArticle').show();//show the readmore button
	});
	//Home Vision part
	$('.read_more').click(function(){
		var $this = $(this);
		if($this.hasClass('clicked')){
			$this.parents('.12u').first().removeClass('12u active').addClass('4u');
			$this.parents('.12u').first().find('p').find('span').hide();
			$this.parents('.4u').first().siblings().css('width','');
			$this.parents('.4u').first().siblings().css('height','');
			$this.parents('.4u').first().siblings().css('opacity','1');
			$this.removeClass('clicked');
			$this.text('More');
		}
		else{
			$this.parents('.4u').first().siblings().css('opacity','0');
			setTimeout(function(){
				$this.parents('.4u').first().siblings().css('width','0');
				$this.parents('.4u').first().siblings().css('height','0');
				$this.parents('.4u').first().removeClass('4u').addClass('12u active');
				$this.parents('.12u').first().find('p').find('span').show();
			},300);
			$this.addClass('clicked');
			$this.text('Less');
		}
	});
});