/*	~Carousel Generator for Bootstrap 3~
 *	by Tom Shaddock
 *  https://github.com/raincoats
 * 
 *  THIS IS CLOSED SOURCE SOFTWARE CONTAINING
 *  A PROPIETARY WINDOWS LIKE OPERATING SYSTEM
 * 	STAY AWAY HISS HISS
 *  no i'm just joking insert MIT licence here i dont care
 */

function loadCarouselParts(images){
	var numberOfImages = images.length;
	var topPart;
	var dataPart = "";
	var picturePart;
	var lastPart;

	for (i=1; i < numberOfImages; i++){
		dataPart = dataPart + ('<li data-target="#carousel-example-generic" data-slide-to="' + i + '"></li>\r\n');
	}

	var topPart = 	'\
	<div id="carousel-example-generic"\ class="carousel slide" data-ride="carousel">\r\n<ol class="carousel-indica' + 
	'tors">\r\n<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>\r\n' + dataPart + 
	'</ol>\r\n\r\n<div class="carousel-inner">\r\n';


	var picturePart = "";
	for (i=0; i<numberOfImages; i++){
		if (i === 0){
			picturePart = picturePart + ('<div class="item active"><img src="./img/' + 
			images[0].src + '" alt="' + images[1].alt + '">\r\n\<div class="carousel-caption">' + images[0].caption + '</div></div>\r\n\r\n');

		} else {
			picturePart = picturePart + ('<div class="item"><img src="./img/' + 
			images[i].src + '" alt="' + images[i].alt + '">\r\n\<div class="carousel-caption">' + images[i].caption + '</div></div>\r\n\r\n');
		}
	}

	var middlePart =  picturePart +	'\r\n</div>';

	lastPart = 	'<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">' +
				'<span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control" href="' + 
				'#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevro' + 
				'n-right"></span></a></div>';

	return (topPart + middlePart + lastPart);

}

function loadImages(){
	var img = [];

	img[0] = {
		src: "col1.jpg",
		alt: "alt-text",
		caption: "lorem ipsum"
	}
	img[1] = {
		src: "col2.jpg",
		alt: "alt-text2",
		caption: "lorem ipsum"
	}
	img[2] = {
		src: "col3.jpg",
		alt: "alt-text3",
		caption: "lorem ipsum"
	}
	img[3] = {
		src: "col4.jpg",
		alt: "alt-text4",
		caption: "lorem ipsum"
	}

	return img;
}


$(document).ready(function(){
	$('#carousel').append( loadCarouselParts( loadImages() ) );
});
