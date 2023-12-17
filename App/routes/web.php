<?php 

require_once SITE_ROOT . '/App/routes/router.php';
require_once SITE_ROOT . '/App/controller/userController.php';
require_once SITE_ROOT . '/App/controller/pageController.php';
require_once SITE_ROOT . '/App/controller/authController.php';

use MVC\controllers\AuthController;
use MVC\controllers\PageController;
use MVC\Router;

$router = new Router();

//Error area
$router->addRoute('404', PageController::class, 'error404');

//Public area
$router->addRoute('/', PageController::class, 'index');
$router->addRoute('public/sobre-nos', PageController::class, 'sobreNos');
$router->addRoute('public/servicos', PageController::class, 'servicos');
$router->addRoute('public/contactos', PageController::class, 'contactos');

//Login area
$router->addRoute('login', PageController::class, 'login');
$router->addRoute('register', PageController::class, 'register');
//--------------------------------------------------------------------------\\
$router->addRoute('login/verify', AuthController::class, 'verifyLogin');
$router->addRoute('register/verify', AuthController::class, 'verifyRegister');
$router->addRoute('logout', AuthController::class, 'logout');

//Private area
$router->addRoute('private', PageController::class, 'dashboard');
$router->addRoute('private/funcionarios', PageController::class, 'funcionarios');

$router->addRoute('private/users', PageController::class, 'viewUsers');
$router->addRoute('private/profile', PageController::class, 'profile');



?>