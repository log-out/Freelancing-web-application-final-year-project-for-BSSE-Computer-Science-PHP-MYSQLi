
$(document).ready(function(){
	/* Act on the event */
	$('#info_submit').click(function(event) {
		/* Act on the event */
		event.preventDefault();

		var data = $('#info_text').val();

		$.post('includes/ajax_profile.php', {info_text: data, info_post_submit: true}) 
		.done(function(msg) {
			$('#show_form').hide('slow');
			$('#hide_form').hide('slow');
			$('#remove_info').show('fast');
			$('#show_pinfo').text(msg);

		})
		.fail(function(error) {
			$('#show_pinfo').text('failed');
		})
	});

	$('#show_info_form').click(function(event) {
		/* Act on the event */
		event.preventDefault();

		$('#show_form').removeClass('ed_hide');
		$('#remove_info').hide('fast');
	});







});
