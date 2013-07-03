$(document).ready(function() {
	$('input#name').keyup(function() { get_name(); });
	$('input#name').blur(function() { get_name(); });
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