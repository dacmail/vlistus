$(document).ready(function() {
	$('input#name').keyup(function() { get_name(); });
	$('input#name').blur(function() { get_name(); });
	$('.admin-share').click(function() { $('#admin-share').show(500);  $('.overlay').show(); });
	$('.collab-share').click(function() { $('#collab-share').show(500);  $('.overlay').show(); });
	$('.play-share').click(function() { $('#play-share').show(500);  $('.overlay').show(); });

	$('.overlay').click(function() { $('.popup').hide(); $('.overlay').hide(); });
	$('.popup input').click(function() {this.select(); return false;});
});
function get_name() {
	obj = $('input#name');
	$.ajax({
		  type: "POST",
		  url: obj.data('url'),
		  data: { name: obj.val() },
		  dataType: 'json'
		}).done(function( data ) {
			if (typeof data.slug === "undefined")
				$('#available').text("");
			else
				$('#available').text("Your playlist URL will be http://vlistus.com/" + data.slug);
		});
}