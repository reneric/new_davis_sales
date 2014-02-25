$(function(){
	$contact = $('.contact-page')
	$contact_pos = $contact.offset();
	$marker_panel = $('#markerOptions').css({
		left: $contact_pos.left,
		opacity: '1'
	});

})