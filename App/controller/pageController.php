<?php
namespace MVC\controllers;

require_once SITE_ROOT . '/App/controller/controller.php';
require_once SITE_ROOT . '/App/controller/funcionarioController.php';
require_once SITE_ROOT . '/App/controller/trabalhoController.php';
require_once SITE_ROOT . '/App/controller/orcamentoController.php';
require_once SITE_ROOT . '/App/core/connect.php';

use MVC\Controller;
use MVC\connect;
use MVC\controllers\FuncionarioController;
use MVC\controllers\TrabalhoController;
use MVC\controllers\OrcamentoController;
use MVC\models\Orcamento;
use MVC\models\Trabalho;

class PageController extends Controller
{

    private $connect;
    private $connection;

    public function __construct()
    {

        $this->connect = new connect();

        $this->connection = $this->connect->Connection();

    }

    //Error pages
    public function error404()
    {

        $this->view("error/404");

    }

    //Public pages
    public function index()
    {

        $this->view("front-pages/index");

    }
    public function sobreNos()
    {

        $this->view("front-pages/sobre_nos");

    }
    public function servicos()
    {

        $this->view("front-pages/servicos");

    }
    public function contactos()
    {

        $this->view("front-pages/contactos");

    }

    //verification pages
    public function login()
    {
        if (isset($_SESSION["id"])) {
            $this->view("back-pages/index");
        } else {
            $this->view("back-pages/login/index");
        }


    }
    public function register()
    {

        $this->view("back-pages/login/register");

    }

    //private pages
    public function dashboard()
    {
        if (isset($_SESSION["id"])) {
            $this->view("back-pages/index");
        } else {
            header("location: /trabalho_ti/login");
        }
    }

    public function funcionarios()
    {
        if (isset($_SESSION["id"])) {
            $funcionario = new FuncionarioController;
            $funcionario->index();
        } else {
            $this->view("back-pages/login/index");
        }
    }

    public function trabalhos(){
        if (isset($_SESSION["id"])) {
            $trabalho = new TrabalhoController;
            $trabalho->index();
        } else {
            $this->view("back-pages/login/index");
        }
    }

    public function trabalhoDetails(){
        if (isset($_SESSION["id"])) {

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                $trabalho = new Trabalho($this->connection);
                $trabalho->fetchById($_POST['id_trabalho']);
                
                $this->view("back-pages/trabalho/detail", ['trabalho' => $trabalho]);
                
            }

        } else {
            $this->view("back-pages/login/index");
        }
    }

    public function orcamentos(){
        if (isset($_SESSION["id"])) {
            $orcamentos = new OrcamentoController;
            $orcamentos->index();
        } else {
            $this->view("back-pages/login/index");
        }
    }

    public function OrcamentosAddPage(){
        if (isset($_SESSION["id"])){
            $this->view("back-pages/orcamento/create");
        } else {
            $this->view("back-pages/login/index");
        }
    }

    public function viewUsers()
    {
        if (isset($_SESSION["id"])) {
            $this->view("back-pages/user/index");
        } else {
            $this->view("back-pages/login/index");
        }
    }
    public function profile()
    {
        if (isset($_SESSION["id"])) {
            $this->view("back-pages/user/detail");
        } else {
            $this->view("back-pages/login/index");
        }
    }

}


?>