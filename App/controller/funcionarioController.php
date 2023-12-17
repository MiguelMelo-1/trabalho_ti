<?php 
namespace MVC\controllers;

require_once SITE_ROOT . '/App/controller/controller.php';
require_once SITE_ROOT . '/App/model/funcionario.php';
require_once SITE_ROOT . '/App/core/connect.php';

use MVC\Controller;
use MVC\models\Funcionario;
use MVC\connect;

class FuncionarioController extends Controller {

    private $connect;
    private $connection;

    public function __construct() {

        $this->connect = new connect();

        $this->connection = $this->connect->Connection();
        
    }
    
    public function index() {

        $funcionario = new Funcionario($this->connection);

        $funcionario = $funcionario->fetchAll();

        $this->view("back-pages/funcionario/index", ['funcionarios' => $funcionario]);
    }

}

?>