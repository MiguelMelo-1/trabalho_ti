<?php
namespace MVC\controllers;

require_once SITE_ROOT . '/App/controller/controller.php';
require_once SITE_ROOT . '/App/model/trabalho.php';
require_once SITE_ROOT . '/App/core/connect.php';

use DateTime;
use MVC\Controller;
use MVC\models\Trabalho;
use MVC\connect;

class TrabalhoController extends Controller
{
    private $connect;
    private $connection;
    public $errors = array();

    public function __construct()
    {
        $this->connect = new connect();
        $this->connection = $this->connect->Connection();
    }

    public function index()
    {
        $trabalho = new Trabalho($this->connection);
        $trabalhos = $trabalho->fetchAll();

        $this->view("back-pages/trabalho/index", ['trabalhos' => $trabalhos]);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Verificar campos preenchidos
            foreach ($_POST as $data) {
                if (empty($data)) {
                    array_push($this->errors, "O campo " . $data . " é obrigatório ser preenchido!");
                }
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
            }
    
            // Mostrar erros
            if (!empty($this->errors)) {
                $this->view("back-pages/trabalho/index", ['errors' => $this->errors]);
                exit();
            } else {

                // Adicionar o trabalho
                $trabalho = new Trabalho($this->connection);
    
                $trabalho->setDescricao($_POST['inputDescricao']);
                // $trabalho->setDataInicio($_POST['inputDataInicio']);
                // $trabalho->setDataFim($_POST['inputDataFim']);
                // $trabalho->setLocal($_POST['inputLocal']);
    
                $trabalho->insert();
    
                // Redirecionar para a mesma página
                header('location: /trabalho_ti/private/trabalhos');
            }
        } else {
            // Página de erro
            header('location: /trabalho_ti/404');
        }
    }

    public function remove()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['trabalho_id_to_remove'])) {
                $trabalhoIdToRemove = $_POST['trabalho_id_to_remove'];

                $trabalho = new Trabalho($this->connection);
                $trabalho->deleteById($trabalhoIdToRemove);

                header('location: /trabalho_ti/private/trabalhos');
            }
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['trabalho_id_to_edit'])) {
                $trabalhoIdToEdit = $_POST['trabalho_id_to_edit'];

                $trabalho = new Trabalho($this->connection);
                $trabalhoData = $trabalho->fetchById($trabalhoIdToEdit);

                $this->view("back-pages/trabalho/edit", ['trabalho' => $trabalhoData]);
            }
        }
    }
}

?>
