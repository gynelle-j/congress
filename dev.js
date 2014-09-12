

function scrwidth(){
  	var colsize;
  	var output = "<h4>width: " + window.innerWidth + "<br>";
	if (window.innerWidth < 769) {
		colsize = "column size: xs";
	} 
	else if (window.innerWidth < 993) {
		colsize = "column size: sm";
	} 
	else if (window.innerWidth < 1200) {
		colsize = "column size: md";
	} 
	else if (window.innerWidth > 1199) {
		colsize = "column size: lg";
	} 
	else {
		colsize = null;
	}

	return output + colsize;
}
function colcolour(){
	var colour;

    if (window.innerWidth < 769) {
        colour = "hsla(13, 100%, 50%, 0.9)";
    } 
    else if (window.innerWidth < 993) {
        colour = "hsla(423, 100%, 50%, 0.9)";
    }  
    else if (window.innerWidth < 1200) {
        colour = "hsla(233, 100%, 70%, 0.9)";
    }  
    else if (window.innerWidth > 1199) {
        colour = "hsla(190, 100%, 50%, 0.9)";
    }  
    else {
        colour = null;
	}

	return colour;
}

$(document).ready(function(){
	$(".which").append( scrwidth() );
	$(".which").css( "background-color", colcolour() );
});
$(window).resize(function(){
	$(".which").html( scrwidth() );
	$(".which").css( "background-color", colcolour() );
});