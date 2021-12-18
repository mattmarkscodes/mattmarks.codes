<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Matt Marks - Product Manager</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="flexboxgrid.css">
  <link href="https://fonts.googleapis.com/css?family=Inter:400,500,600&amp;display=swap" rel="stylesheet">
  
	<script src="https://cdn.usefathom.com/script.js" data-site="PKWQHMDA" defer></script>

</head>
<body>

<header>
  <div id="rainbow"></div>
  <div class="header__bg"></div>
  <div id="intro">
	<div class="wrap container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-10 col-md-offset-1">
				<h1>Hello! I’m Matt Marks, a <br />product manager, <br />web designer, <br />technical ninja, <br />& creative jedi.</h1>
			</div>
		</div>
		<section id="scrollarrow" class="arrow" style="visibility:hidden;">
		  <a href=""><span></span></a>
		</section>
	</div>
  </div>
</header>

<section class="wrap container-fluid">
	
	<div class="row">
		<div class="col-xs-12 col-md-10 col-md-offset-1">
		
			<div class="portfolio-applesupport">
				<div class="portfolio-applesupport-text fademove">
					<h3>By day, I work as a Product Manager on the <a href="https://apps.apple.com/us/app/apple-support/id1130498044" target="_blank">Apple Support</a> app.</h3>
				</div>
				<div class="fademove iphone13">
					<div class="fade iphone13-screen"></div>
				</div>
			</div>
		
		</div>
	</div>

</section>



<div class="pixels_bg">

<section class="wrap container-fluid">
	
	<div class="row">
		<div class="col-xs-12 col-md-10 col-md-offset-1">
		
			<div class="portfolio-pixels">
				<div class="portfolio-pixels-text fademove">
					<h3>By night, I tickle my imagination with pixels and code.</h3>
				</div>
				<div class="fademove pixelsback"></div>
				<div class="fademove pixelsfront"></div>
			</div>
		
		</div>
	</div>
	
</section>

</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>

$(window).scroll(function() {
    $('.fade').each(function() {
        var top_of_element = $(this).offset().top + 500;
        var bottom_of_element = $(this).offset().top + $(this).outerHeight();
        var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
        var top_of_screen = $(window).scrollTop();

        if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element) && !$(this).hasClass('visible')) {
            $(this).addClass('visible');
        }
    });
});

$(window).scroll(function() {
    $('.fademove').each(function() {
        var top_of_element = $(this).offset().top + 100;
        var bottom_of_element = $(this).offset().top + $(this).outerHeight();
        var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
        var top_of_screen = $(window).scrollTop();

        if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element) && !$(this).hasClass('visible')) {
            $(this).addClass('visible');
        }
    });
});

$(window).scroll(function() {
    var wScroll = $(this).scrollTop();
    $(".pixelsback").css({
        transform: "translateX(" + wScroll / 300 + "%)"
    })
});

$(window).scroll(function() {
    var wScroll = $(this).scrollTop();
    $(".pixelsfront").css({
        transform: "translateX(-" + wScroll / 300 + "%)"
    })
});

$(function() {
     setTimeout(function(){
         showElement();
      }, 4500);

     function showElement() {
         document.getElementById('scrollarrow').style.visibility = "visible";
     }
});


$(window).scroll(function(){
	$(".arrow").css("opacity", 1 - $(window).scrollTop() / 100);
});
</script>
	


</body>
</html>
