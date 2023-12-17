<?php
namespace MVC\controllers;

require_once SITE_ROOT . '/App/controller/controller.php';
require_once SITE_ROOT . '/App/model/user.php';
require_once SITE_ROOT . '/App/core/connect.php';

use MVC\Controller;
use MVC\models\User;
use MVC\connect;

class UserController extends Controller
{

    private $connect;
    private $connection;

    public function __construct()
    {

        $this->connect = new connect();

        $this->connection = $this->connect->Connection();

    }

    public function index()
    {

        $user = new User($this->connection);

        $user = $user->fetchAll();

        $this->view("back-pages/user/index", ['users' => $user]);
    }

}

?>