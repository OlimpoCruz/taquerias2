<!DOCTYPE  html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Taquerias</title>	
		<!-- CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />		
		<!--[if IE 8]>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie8-hacks.css" />
		<![endif]-->
		<!-- ENDS CSS -->	
		
		<!-- GOOGLE FONTS 
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>-->		
		<!-- JS -->
		<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>				
		<!--[if IE]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
	      		/* EXAMPLE */
	      		//DD_belatedPNG.fix('*');
	    	</script>
		<![endif]-->
		<!-- ENDS JS -->			
		<!-- Nivo slider -->
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<script src="js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
		<!-- ENDS Nivo slider -->		
		<!-- tabs -->
		<link rel="stylesheet" href="css/tabs.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/tabs.js"></script>
  		<!-- ENDS tabs -->  		
  		
		<!-- superfish -->	
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 		
		<script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script>
		<script type="text/javascript" src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->		
		<!-- poshytip -->
		<link rel="stylesheet" href="js/poshytip-1.0/src/tip-twitter.css" type="text/css" />		
		<script type="text/javascript" src="js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- Tweet -->		
		<script src="js/tweet/jquery.tweet.js" type="text/javascript"></script> 
		<!-- ENDS Tweet -->					
			
	</head>
	
	<body class="home">

			<!-- HEADER -->
			<div id="header">
				<!-- wrapper-header -->
				<div class="wrapper">
					<a href="index.html"><img id="logo" src="img/Logo_taco.png" alt="Nova" /></a>
					<!-- search -->
					<div class="top-search">
						<form  method="get" id="searchform" action="http://www.google.es/search">
							<div>
								<input type="text" value="Search..." name="q" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
								<input type="submit" id="searchsubmit" value=" " />
							</div>
						</form>
					</div>
					<!-- ENDS search -->
				</div>
				<!-- ENDS wrapper-header -->					
			</div>
			<!-- ENDS HEADER -->
			
			
			<!-- Menu -->
			<div id="menu">
			
			
			
				<!-- ENDS menu-holder -->
				<div id="menu-holder">
					<!-- wrapper-menu -->
					<div class="wrapper">
						<!-- Navigation -->
						<ul id="nav" class="sf-menu">
							<li class="current-menu-item"><a href="index.html">Taquerias Irapuato<span class="subheader">Bienvenidos</span></a></li>							
						</ul>
						<!-- Navigation -->
					</div>
					<!-- wrapper-menu -->
				</div>

				<!-- ENDS menu-holder -->
			</div>
			<!-- ENDS Menu -->
			
			
			

			<!-- Slider -->
			<div id="slider-block">
				<div id="slider-holder">
					<div id="slider">
						<img src="images/01.jpg" title="Servicio de calidad." alt="" />
						<img src="images/02.jpg" title="Las mejores taquerías de la ciudad." alt="" />
					</div>
				</div>
			</div>
			<!-- ENDS Slider -->
			
	<form >

			<!-- MAIN -->
			<div id="main" >
				<!-- wrapper-main -->
				<div class="wrapper">					
					<!-- headline -->
					<div class="clear"></div>					
					<!-- content -->
					<div id="content">						
							<!-- TABS -->
							<!-- the tabs -->
							<ul class="tabs">
								<li><a href="#"><span>Todas las taquerias</span></a></li>
								<li><a href="#"><span>Los mejores Ranking de las taquerias</span></a></li>								
							</ul>							
							<!-- tab "panes" -->
							<div class="panes">							
								<!-- Posts -->
								<div id="TaqueriasBD" >
									<!--<p>Taquerias</p> -->
									<!-- Sustituir por la busqueda en la BD -->
										<?php include("calificaciones.php"); ?>
										
    							</div>	
								<!-- ENDS posts -->
								
								<!-- Information  -->
								<div id="MejoresTaqueriasBD" >

										<?php  include("calificaciones5estrellas.php"); ?>
										

								</div>

								<!-- ENDS Information -->

								
								
								
							</div>

							<!-- ENDS TABS -->					
					</div>

					<!-- ENDS content -->
				</div>
				<!-- ENDS wrapper-main -->
			</div>
			<!-- ENDS MAIN -->
		</form>
			
			
			
			<!-- FOOTER -->
			<div id="footer">
				<!-- wrapper-footer -->
				<div class="wrapper">
					<!-- footer-cols -->
					<ul id="footer-cols">
						
						
						
						
						
					</ul>
					<!-- ENDS footer-cols -->
				</div>
				<!-- ENDS wrapper-footer -->
			</div>
			<!-- ENDS FOOTER -->
		
		
			<!-- Bottom -->
			<div id="bottom">
				<!-- wrapper-bottom -->
				<div class="wrapper">
					<div id="bottom-text">2014 Taquerias irapuato todos los derechos reservados. </div>
					<!-- Social -->
					<ul class="social ">
						<li><a href="http://www.facebook.com" class="poshytip  facebook" title="siguenos en facebook"></a></li>	
					</ul>
					<!-- ENDS Social -->
					<div id="to-top" class="poshytip" title="To top"></div>
				</div>
				<!-- ENDS wrapper-bottom -->
			</div>
			<!-- ENDS Bottom -->
	</body>
</html>




