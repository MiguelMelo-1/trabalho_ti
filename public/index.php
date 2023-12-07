<?php 

require_once './../App/config/global.php';

if(session_status() !== PHP_SESSION_ACTIVE) {
	$strFilePage = './../App/views/front-pages/'. DEFECT_PAGE;
	require_once $strFilePage;
}else{
	$strFilePage = './../App/views/back-pages/'. DEFECT_PAGE;
	require_once $strFilePage;
}
?>