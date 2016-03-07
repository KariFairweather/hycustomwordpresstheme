$(function(){

	$('.hamburger').on('click', function(event){
		///prevent browser from refreshing
		event.preventDefault();
		///check to see if our event is firing
		console.log('it clicked')
		///use the jquery slideToggle method to show our nav
		$('#overlay').slideToggle();
	});

	// $( "#more" ).click(function() {
	// 	// e.preventdefault();
	//   $( "#author-description" ).slideToggle( "slow", function() {
	//     // Animation complete.
	//   });
	// });
	
	$("#author-description").addClass("container-closed");
	$("#more").click( function() {
	
	      $("#author-description").toggleClass("container-closed", 700, 'ease');
	});
	
});