<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Keywords" content="美中国际商会,美中,商会,China-U.S.,CUSCC,China-U.S. Chamber of Commerce">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>China-U.S. Chamber of Commerce</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/child_css/style.css" rel="stylesheet">
<script src="<?php echo get_stylesheet_directory_uri();?>/child_js/jquery-3.1.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/child_js/cuscc_menu.js"></script>
</head>
<body>
	
	<div id="cuscc_top">
		<div id="cuscc_nav">
			<div id="cuscc_map" class="left">
				<span class="vertical_align_helper"></span>
				<div id="cuscc_branches_link_container">
					<div id="cuscc_branches_icon" class="left"></div>
					<div id="cuscc_branches_name" class="left">Worldwide Locations</div>
				</div>
				<div class="clear"></div>
				
			</div>
			<div id="cuscc_media_container" class="right">
				<ul id="cuscc_media">
					<li id="cuscc_media_facebook"></li>
					<li id="cuscc_media_twitter"></li>
					<li id="cuscc_media_youtube"></li>
					<li id="cuscc_media_weibo"></li>
					<li id="cuscc_media_wechat"></li>
				</ul>
			</div>
			<div id="cuscc_search_container" class="right"></div>
			<div class="clear"></div>
		</div>
		<div id="cuscc_branches" class="hide">
			<iframe src="https://www.google.com/maps/d/embed?mid=1QoKEc7ZIptuq1wqOi4UL2hieNbA" width="100%" height="480"></iframe>
		</div>
		<div id="cuscc_logo" class="left"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/child_images/logo.png"/></a></div>
		<div id="cuscc_menu" class=left>
			<?php 
				//show menu = main
				wp_nav_menu( array('menu' => 'main','depth'=>2));
			?>
		</div>
		
		<div class="clear"></div>
	</div>
		
