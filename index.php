<?php

/* file_put_contents('servenus.txt', print_r('INDEX_REQUEST_URI ='.$_SERVER['REQUEST_URI'],true),FILE_APPEND);
file_put_contents('servenus.txt', print_r(PHP_EOL,true),FILE_APPEND); */

// Languages
@session_start();
$_SESSION['access'] = true;
if(isset($_GET['lang'])) { 						// Выбранный язык отправлен скрипту через GET
	$_SESSION['lang'] = trim(strip_tags($_GET['lang']));
	$date = time() + 30*24*60*60;
	setcookie('lang',trim(strip_tags($_GET['lang'])),$date);			
} else if (isset($_COOKIE['lang'])) { 				// Если язык уже выбран и сохранен в сессии отправляем его скрипту
	$_SESSION['lang'] = $_COOKIE['lang'];
} else { 									// Язык по умолчанию
	$uri = $_SERVER['REQUEST_URI'];
	$ru = strpos($uri, 'doc/ru');
	
	if ($ru) {
		$_SESSION['lang'] = 'ru';
	} else {
		$_SESSION['lang'] = 'en';
	} 	
}

// Route
if(isset($_GET['page'])) { 	
	header("Location: " . $_GET['page'] . ".html");
} else {	
	header("Location: /start.html");
}

?>