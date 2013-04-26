<!doctype html>
<!--[if lt IE 8]><html class="lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>John R. Reader DDS</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/grid.css">	
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-nav.css">	
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css">
	<![endif]-->	
	
	<!-- Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic|PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
	
	<!-- Scripts -->	
	<script src="js/responsive-nav.min.js"></script>
</head>
<body>
	
	<div class="header">
		<div class="container-alt">	
			<div class="logo">
				<div class="logo-title serif green-txt bold"><a href="/" class="logo-title">John R Reader DDS</a></div>
				<div class="logo-subtitle lt-grey-txt serif">960 Illinois Route 22 Suite 206
				<br>Fox River Grove, IL 60021</div>			
			</div>
		</div>
	</div>
	
	<div class="container-alt">			
		<div class="grid-wrap">
			<div class="grid-col col-full">
				<div id="nav" class="serif">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">FAQs</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Testimonials</a></li>
					</ul>
				</div>
			</div>				
		</div> 
	</div>

	<div class="container">		
		
		<!-- Hero Piece -->
		
		<div class="divide-bottom">
			<div class="grid-wrap">
				<div class="grid-col col-full">
					<img src="images/banner-home.jpg" alt="Your Own Personal Dentist">
				</div>				
			</div>  
		</div>
	
		<div class="divide-bottom">
			<div class="grid-wrap">
				<div class="grid-col bp1-col-one-half">
					<h2>About Dr. Reader</h2>
					<p>Dr. Reader has been a practicing professional dentist for over 25 years. His experience, skill and genuine care for others have earned him the highest trust and respect among his patients and peers. Visit the about page to learn more or read what other patients have to say.</p>
					<p><a href="#" class="bold">Read more &raquo;</a></p>
				</div>
				<div class="grid-col bp1-col-one-half">
					<h2>What People Are Saying</h2>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
				</div>
			</div>  
		</div>
		
		<div class="divide-bottom">
			<div class="grid-wrap">
				<div class="grid-col bp1-col-one-half">
					<h2>Where We're Located</h2>
					<p>Located near the intersection of Route 22 and Route 14, we&rsquo;re easily accessible to residents of Fox River Grove, Cary, Barrington and the surrounding suburbs.</p>
					<p>Address:<br>
					960 Illinois Route 22 Suite 206<br>
					Fox River Grove, IL 60021<br>
					<p><a href="#" class="bold">See it on a map &raquo;</a></p>
				</div>
				<div class="grid-col bp1-col-one-half">
					<h2>Frequently Asked Questions</h2>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
				</div>
			</div>  
		</div>
	
	</div> <!-- end .container -->
	
	<div class="footer">
		<h1>Proportional Grids</h1>
		<p>Don&rsquo;t think widths, think proportions. A dead simple method of creating responsive fluid grids with fixed gutters. Use classes to set the proportions you want your columns to take at which breakpoint.</p>
	</div>
	
	<!-- Scripts -->
	<script>
		var navigation = responsiveNav("#nav");	
		
		var navigation = responsiveNav("#nav", {
			insert: "before"
		});    
	</script>

</body>
</html>