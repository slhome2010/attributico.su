<?php
$uri = $_SERVER['REQUEST_URI'];
$ru = strpos($uri, 'doc/ru');
$en = strpos($uri, 'doc/en');

/* file_put_contents('../servenus.txt', print_r('DIRECT_REQUEST_URI ='.$_SERVER['REQUEST_URI'],true),FILE_APPEND);
file_put_contents('../servenus.txt', print_r(PHP_EOL,true),FILE_APPEND); */  

//Addition routing for direct links
@session_start();
if ($ru) {
    $_SESSION['lang'] = 'ru';
} else if ($en) {
    $_SESSION['lang'] = 'en';
} else {

}

?>