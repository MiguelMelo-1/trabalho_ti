<?php 

require_once SITE_ROOT . '/App/routes/router.php';
require_once SITE_ROOT . '/App/controller/userController.php';
require_once SITE_ROOT . '/App/controller/pageController.php';

use MVC\controllers\PageController;
use MVC\Router;

$router = new Router();

$router->addRoute('/', PageController::class, 'index');
$router->addRoute('public/sobre-nos', PageController::class, 'sobreNos');

?>