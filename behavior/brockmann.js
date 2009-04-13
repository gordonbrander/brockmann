jQuery(function($) {
	$('#navigation').hide();
	$('a[href~=#navigation]').click(function() {
		$($(this).attr('href')).toggle('fast');
		return false;
	})
});