<?php
namespace MVC\controllers;

require_once SITE_ROOT . '/App/controller/controller.php';
require_once SITE_ROOT . '/App/model/orcamento.php';
require_once SITE_ROOT . '/App/core/connect.php';

use MVC\Controller;
use MVC\models\Orcamento;
use MVC\connect;

class OrcamentoController extends Controller
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
        $orcamento = new Orcamento($this->connection);
        $orcamentos = $orcamento->fetchAll();

        $this->view("back-pages/orcamento/index", ['orcamentos' => $orcamentos]);
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
                $this->view("back-pages/orcamento/index", ['errors' => $this->errors]);
                exit();
            } else {

                // Adicionar o orcamento
                $orcamento = new orcamento($this->connection);
    

                $orcamento->insert();
    
                // Redirecionar para a mesma página
                header('location: /orcamento_ti/private/orcamentos');
            }
        } else {
            // Página de erro
            header('location: /orcamento_ti/404');
        }
    }

    public function remove()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['orcamento_id_to_remove'])) {
                $orcamentoIdToRemove = $_POST['orcamento_id_to_remove'];

                $orcamento = new orcamento($this->connection);
                $orcamento->deleteById($orcamentoIdToRemove);

                header('location: /orcamento_ti/private/orcamentos');
            }
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['orcamento_id_to_edit'])) {
                $orcamentoIdToEdit = $_POST['orcamento_id_to_edit'];

                $orcamento = new orcamento($this->connection);
                $orcamentoData = $orcamento->fetchById($orcamentoIdToEdit);

                $this->view("back-pages/orcamento/edit", ['orcamento' => $orcamentoData]);
            }
        }
    }
}

?>
