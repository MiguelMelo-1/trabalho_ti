<?php
namespace MVC\controllers;

require_once SITE_ROOT . '/App/controller/controller.php';
require_once SITE_ROOT . '/App/core/connect.php';

use MVC\Controller;
use MVC\connect;

class PageController extends Controller {

    private $connect;
    private $connection;

    public function __construct() {

        $this->connect = new connect();

        $this->connection = $this->connect->Connection();
        
    }
    
    //Error pages
    public function error404(){

        $this->view("error/404");

    }

    //Public pages
    public function index() {

        $this->view("front-pages/index");

    }
    public function sobreNos() {

        $this->view("front-pages/sobre_nos");

    }
    public function servicos() {

        $this->view("front-pages/servicos");

    }
    public function contactos() {

        $this->view("front-pages/contactos");

    }

    //verification pages
    public function login() {

        $this->view("back-pages/login/index");

    }
    public function register() {

        $this->view("back-pages/login/register");

    }

    //private pages
    public function dashboard() {
        if(session_status() == PHP_SESSION_ACTIVE) {
            $this->view("back-pages/index");
        }else{
            $this->view("back-pages/login/index");
        }
    }



}


?>
