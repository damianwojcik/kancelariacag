<?php

	// vars
	define("THEME_URL", get_stylesheet_directory_uri());
	define("TEMPLATE_PATH", get_stylesheet_directory() .'/');
	define("SITE_URL", site_url());

	//include php files
	foreach ( glob ( TEMPLATE_PATH . "incl/*.php" ) as $filename ) {
		include $filename;
	}