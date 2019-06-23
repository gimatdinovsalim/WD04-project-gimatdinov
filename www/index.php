<?php 
require "config.php";
require "db.php";

// ROUTER ******************************


$uri = $_SERVER["REQUEST_URI"]; //     /portfolio/

$uri = rtrim($uri, "/");  // обрезаем строку      /portfolio

$uri = filter_var($uri, FILTER_SANITIZE_URL);

$uri = substr($uri, 1);  // обрезаем первый слеш     portfolio

$uri = explode('?', $uri);


switch ($uri[0]) {
	case '':
		include "modules/main/index.php";
		break;
	case 'about':
		include "modules/about/index.php";
		break;
	case 'contacts':
		include "modules/contacts/index.php";
		break;
	case 'blog':
		include "modules/blog/index.php";
		break;	
	default:
		include "modules/main/index.php";
		break;
}





















?>