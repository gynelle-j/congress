<?php
	require 'assembly.php'; 
	head("specimen draft"); 
?>
	<main class="row">
	<script id="box" type="text/javascript">
	var img = [
	{
		src: "col1.jpg",
		alt: "alt-text",
		caption: "lorem ipsum"
	},
	{
		src: "col2.jpg",
		alt: "alt-text2",
		caption: "lorem ipsum"
	},
	{
		src: "col3.jpg",
		alt: "alt-text3",
		caption: "lorem ipsum"
	},
	{
		src: "col4.jpg",
		alt: "alt-text4",
		caption: "lorem ipsum"
	}
];
	</script>
	<script src="./js/carouselgen.js"></script>

	<section id="carousel" class="col-md-8 col-md-offset-2">
	</section>







		<article class="col-md-8 col-md-offset-2">
			<div name="markdown testing" class="row">
				<div class="col-md-8">
						<h3>IISS Bahrain Global Forum</h3>
						<date>May 2010</date>
				</div>
				<div class="col-md-8">
					<b>Location:</b>
					<p>Ritz Carlton - Bahrain</p>
					<b>Features:</b>
					<i>Plenary</i>
					<ul>
						<li>180 Conference Microphones</li>
						<li>2 Booths, Using Audipack booths to provide the best sound proofing, then hidden as part of the set design</li>
					</ul>
					<i>Breakouts x2</i>
					<ul>
						<li>Each with 2x Dome Cameras and 30 Microphones</li>
						<li>500 Receivers</li>
						<li>3 Days</li>
					</ul>
				</div>
				<div class=" col-md-12">
					<p>This event is challenging because the Gala Dinner format needs to be changed to Classroom style overnight.Software manages the microphones so that Microphones accidentally left on by delegates can be turned off by the operator. Having this software also tells the operator if any cables are kicked out accidentally, or disconnected (Before even delegates know there is a problem)</p>
				</div>
			</div>
		</article>
	</main>
<?php
	foot(); 
?>
