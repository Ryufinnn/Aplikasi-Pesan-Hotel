<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>jQuery Photo Slide Show with Slick Caption Tutorial Revisited</title>

<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {		
	
	//Execute the slideShow, set 4 seconds for each images
	slideShow(2000);

});

function slideShow(speed) {


	//append a LI item to the UL list for displaying caption
	$('ul.slideshow').append('<li id="slideshow-caption" class="caption"><div class="slideshow-caption-container"><h3></h3><p></p></div></li>');

	//Set the opacity of all images to 0
	$('ul.slideshow li').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	$('ul.slideshow li:first').css({opacity: 1.0}).addClass('show');
	
	//Get the caption of the first image from REL attribute and display it
	$('#slideshow-caption h3').html($('ul.slideshow li.show').find('img').attr('title'));
	$('#slideshow-caption p').html($('ul.slideshow li.show').find('img').attr('alt'));
		
	//Display the caption
	$('#slideshow-caption').css({opacity: 0.7, bottom:0});
	
	//Call the gallery function to run the slideshow	
	var timer = setInterval('gallery()',speed);
	
	//pause the slideshow on mouse over
	$('ul.slideshow').hover(
		function () {
			clearInterval(timer);	
		}, 	
		function () {
			timer = setInterval('gallery()',speed);			
		}
	);
	
}

function gallery() {


	//if no IMGs have the show class, grab the first image
	var current = ($('ul.slideshow li.show')?  $('ul.slideshow li.show') : $('#ul.slideshow li:first'));
	
	//trying to avoid speed issue
	if(current.queue('fx').length == 0) {	
	
		//Get next image, if it reached the end of the slideshow, rotate it back to the first image
		var next = ((current.next().length) ? ((current.next().attr('id') == 'slideshow-caption')? $('ul.slideshow li:first') :current.next()) : $('ul.slideshow li:first'));
			
		//Get next image caption
		var title = next.find('img').attr('title');	
		var desc = next.find('img').attr('alt');	
	
		//Set the fade in effect for the next image, show class has higher z-index
		next.css({opacity: 0.0}).addClass('show').animate({opacity: 1.0}, 1000);
		
		//Hide the caption first, and then set and display the caption
		$('#slideshow-caption').slideToggle(300, function () { 
			$('#slideshow-caption h3').html(title); 
			$('#slideshow-caption p').html(desc); 
			$('#slideshow-caption').slideToggle(500); 
		});		
	
		//Hide the current image
		current.animate({opacity: 0.0}, 1000).removeClass('show');

	}

}
</script>
<style type="text/css">

body {
	font-family:arial;	
	font-size:12px;
}

ul.slideshow {
	list-style:none;
	width:550px;
	height:250px;
	overflow:hidden;
	position:relative;
	margin:0;
	padding:0;
	
}	

ul.slideshow li {
	position:absolute;
	left:0;
	right:0;
}

ul.slideshow li.show {
	z-index:500;	
}

ul img {
	border:none;	
}


#slideshow-caption {
	width:550px;
	height:70px;
	position:absolute;
	bottom:0;
	left:0;	
	color:#fff;
	background:#000;
	z-index:500;
}

#slideshow-caption .slideshow-caption-container {
	padding:5px 10px;		
	z-index:1000;
}

#slideshow-caption h3 {
	margin:0;
	padding:0;	
	font-size:14px;
}

#slideshow-caption p {
	margin:5px 0 0 0;
	padding:0;
}

</style>
</head>
<body>

<ul class="slideshow">
	<li class="show"><a href="http://galeri.php"><img src="images/kamar.jpg" width="550" height="250" title="Rooms" alt="Berbagai macam kamar yang disediakan oleh Hotel Padang."/></a></li>
	<li><a href="http://galeri.php"><img src="images/cafe1.jpg" width="550" height="250" title="Restaurant" alt="Restaurant yang disediakan Hotel Padang untuk tamu. Berbagai macam menu makanan disediakan disini."/></a></li>
	<li><a href="http://galeri.php"><img src="images/taman1.jpg" width="550" height="250" title="Taman" alt="Taman yang terletak di Depan Kamar. Taman bisa digunakan untuk bersantai, ngobrol bersama rekan bisnis maupun keluarga."/></a></li>
</ul>


<br/><br/>
<div style="font-size:14px;color:#FF0000"><marquee direction="right">Hotel Padang Will Be Do Best For You!!!</marquee></div>
<a href="http://index.php">Back to Home</a>



</body>
</html>
