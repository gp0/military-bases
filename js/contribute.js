$(function() {
	$( "#map" ).on( "submit", "#contribute", function(e) {
		e.preventDefault();
		if ( $(this).parsley('validate') ) {
	  		$.post("ajax/contribute.php", $(this).serialize(), function(data) {
	  			$("#contribute").html(data);
	  		});
	  	}
	});
});