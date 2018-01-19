<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Student Management System</title>
	<!-- Bootstrap -->
        <link href="./css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <link href="./css/bootstrap.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
        <link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- start plugins -->
        <script type="text/javascript" src="./js/jquery.min.js"></script>
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        <script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<!-- start slider -->
        <link href="./css/slider.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="./js/modernizr.custom.28468.js"></script>
        <script type="text/javascript" src="./js/jquery.cslider.js"></script>
	<script type="text/javascript">
        $(function() {

            $('#da-slider').cslider({
                autoplay : true,
                bgincrement : 450
            });

        });
	</script>
	<!-- Owl Carousel Assets -->
	<link href="./css/owl.carousel.css" rel="stylesheet">
	<script src="./js/owl.carousel.js"></script>
	<script>
        $(document).ready(function() {

            $("#owl-demo").owlCarousel({
                items : 4,
                lazyLoad : true,
                autoPlay : true,
                navigation : true,
                navigationText : ["", ""],
                rewindNav : false,
                scrollPerPage : false,
                pagination : false,
                paginationNumbers : false,
            });

        });
	</script>
	<!-- //Owl Carousel Assets -->
	<!----font-Awesome----->
        <link rel="stylesheet" href="./fonts/css/font-awesome.min.css">
	<!----font-Awesome----->
</head>
<body>
<div class="header_bg">
	<div class="container">
		<div class="row header">
			<div class="logo navbar-left">
				<h1><a href="index.html">SM  System</a></h1>
			</div>
			<div class="h_search navbar-right">
				<form>
					<input type="text" class="text" value="Enter text here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter text here';}">
					<input type="submit" value="search">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="technology.html">Addmission</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="blog.html">Notice</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
			<!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			</ul>
		</div>
	</div>
</div>