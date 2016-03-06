$(function(){

	console.log("It's working");

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