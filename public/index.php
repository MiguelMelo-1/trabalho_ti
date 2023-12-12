<?php 



require_once '../config.php';
require_once SITE_ROOT .'/App/config/global.php';
require_once SITE_ROOT . '/App/routes/web.php';

$url = isset($_GET['url']) ? $_GET['url'] : '/';

echo $url;


// if(session_status() !== PHP_SESSION_ACTIVE) {
// 	$strFilePage = SITE_ROOT .'/App/views/front-pages/'. DEFECT_PAGE;
// 	require_once $strFilePage;
// }else{
// 	$strFilePage = SITE_ROOT .'/App/views/back-pages/'. DEFECT_PAGE;
// 	require_once $strFilePage;
// }

// $uri = $_SERVER['REQUEST_URI'];
// $router = require SITE_ROOT . '/App/routes/web.php';
$router->dispatch($url);



?>