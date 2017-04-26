$(document).ready(function() {
	$(".moreinfo").hide();
    $("#hide p").click(function() {
        $(this).parent().next().slideToggle();
    });
});