<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Bibliothèque</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" media="all"/>

<!-- light-box -->
	<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>	
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
     <script type="text/javascript">
		$(document).ready(function() {

			$('.fancybox').fancybox();

		});
	</script>
<!---- End Light-box ------>
</head>
<body>
<div class="header">
 <div class="header_top">
    <div class="wrap">
	  <div class="header-top-left">
			<div class="logo">
			     <a href="index.php"><h1><?php echo get_bloginfo( 'name' ); ?></h1>
			     	<h2><?php echo get_bloginfo( 'description' ); ?></h2>
			     </a>
			</div>
		<div class="menu">
		     <ul class="menu bounce">
		       <li class="active"><a href="index.php" class="active">Home</a></li>
		       <li><a href="#">About</a></li>
		       <li><a href="#">Support</a></li>
		       <li><a href="#">Contact</a></li>
		     </ul>
	   </div>
	 <div class="clear"></div>
   </div>  
	   <div class="header-top-right">
	   				   
				   			<div class="search_box">
							    <form>
									<input type="text" class="text-box" placeholder="Search for Blog"><input type="submit" value="" />
							    </form>
						   </div>
			  		 <div class="clear"></div>
		  		 </div>
		  		<div class="clear"></div>
	  		</div>
		</div>
</div>