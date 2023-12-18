<?php
namespace MVC\controllers;

require_once SITE_ROOT . '/App/controller/controller.php';
require_once SITE_ROOT . '/App/model/funcionario.php';
require_once SITE_ROOT . '/App/core/connect.php';

use DateTime;
use MVC\Controller;
use MVC\models\Funcionario;
use MVC\connect;

class FuncionarioController extends Controller
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

        $funcionario = new Funcionario($this->connection);

        $funcionario = $funcionario->fetchAll();



        $this->view("back-pages/funcionario/index", ['funcionarios' => $funcionario]);
    }

    public function add()
    {
        //Verificar POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Verificar campos preenchidos
            foreach ($_POST as $data) {
                if (empty($data)) {
                    array_push($this->errors, "O campo" . $data . " é obrigatório ser preenchido!");
                }
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
            }



            //mostrar erros
            if (!empty($errors)) {
                $this->view("back-pages/funcionario/index", ['errors' => $this->errors]);
                exit();
            } else {


                //validar nome
                if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['inputNome'])) {
                    array_push($this->errors, "Nome inválido!");
                }
                //validar nif
                if (strlen($_POST['inputNif']) != 9 || !is_numeric($_POST['inputNif'])) {
                    array_push($this->errors, "NIF inválido!");
                }
                // validar data de nascimento
                if (DateTime::createFromFormat("Y-m-d", $_POST['inputNascimento']) == False) {
                    array_push($this->errors, DateTime::getLastErrors());
                    $verifyAge = (date('Y' - 18) . '-' . date('m-d'));
                    if ($_POST['inputNascimento'] > $verifyAge) {
                        array_push($this->errors, 'Data inválida, tem que ter mais de 18 anos');
                    }
                }
                //validar preco hora
                if (!is_numeric($_POST['inputPrecoHora'])) {
                    array_push($this->errors, 'Valor por hora inválido!');
                }
                //validar tlm
                if (strlen($_POST['inputTlm']) != 9 || !is_numeric($_POST['inputTlm'])) {
                    array_push($this->errors, "Telemóvel inválido!");
                }
                //validar email
                if (!filter_var($_POST['inputEmail'], FILTER_VALIDATE_EMAIL)) {
                    array_push($this->errors, 'Email inválido');
                }
                //validar localidade
                if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['inputLocalidade'])) {
                    array_push($this->errors, "Localidade inválida!");
                }
                //validar código postal
                if (!preg_match("/^\d{4}-\d{3}$/", $_POST['inputCodPostal'])) {
                    array_push($this->errors, 'Código postal inválido');
                }
                //voltar a verificar se há erros e mostrá los
                if (!empty($errors)) {
                    // $this->view("back-pages/funcionario/index", ['errors' => $this->errors]);
                    $this->view("back-pages/index", ['errors' => $this->errors]);
                    exit();
                }
            }
            
            //Adicionar o funcionar
            $funcionario = new Funcionario($this->connection);

            $funcionario->setNome($_POST['inputNome']);
            $funcionario->setNif($_POST['inputNif']);
            $funcionario->setDataNascimento($_POST['inputNascimento']);
            $funcionario->setPrecoHora($_POST['inputPrecoHora']);
            $funcionario->setTlm($_POST['inputTlm']);
            $funcionario->setEmail($_POST['inputEmail']);
            $funcionario->setLocalidade($_POST['inputLocalidade']);
            $funcionario->setCodPostal($_POST['inputCodPostal']);

            $funcionario->insert();

            // redirecionar para a mesma pagina
            header('location: /trabalho_ti/private/funcionarios');


        } else {

            //pagina de erro
            header('location: /trabalho_ti/404');
        }

    }

    public function remove()
    {
        // Verificar se é uma requisição POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Verificar se o ID do funcionário a ser removido foi enviado
            if (isset($_POST['id_funcionario'])) {
                
                // Lógica para remover o funcionário com base no ID
                $funcionario = new Funcionario($this->connection);
                $funcionario->deleteById($_POST['id_funcionario']);

                // Redirecionar para a mesma página
                header('location: /trabalho_ti/private/funcionarios');

            }
        }else{

            //pagina de erro
            header('location: /trabalho_ti/404');

        }
    }

    public function edit()
    {
        // Verificar se é uma requisição POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (isset($_POST['inputNome'])){
                //validar nome
                if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['inputNome'])) {
                    array_push($this->errors, "Nome inválido!");
                }
            }else{
                array_push($this->errors, "O campo Nome é obrigatório ser preenchido!");
            }

            if (isset($_POST['inputNif'])){
                //validar nif
                if (strlen($_POST['inputNif']) != 9 || !is_numeric($_POST['inputNif'])) {
                    array_push($this->errors, "NIF inválido!");
                }
            }else{
                array_push($this->errors, "O campo NIF é obrigatório ser preenchido!");
            }

            if (isset($_POST['inputNascimento'])){
                // validar data de nascimento
                if (DateTime::createFromFormat("Y-m-d", $_POST['inputNascimento']) == False) {
                    array_push($this->errors, DateTime::getLastErrors());
                    $verifyAge = (date('Y' - 18) . '-' . date('m-d'));
                    if ($_POST['inputNascimento'] > $verifyAge) {
                        array_push($this->errors, 'Data inválida, tem que ter mais de 18 anos');
                    }
                }
            }else{
                array_push($this->errors, "O campo Data de Nascimento é obrigatório ser preenchido!");
            }

            if (isset($_POST['inputPrecoHora'])) {
                //validar preco hora
                if (!is_numeric($_POST['inputPrecoHora'])) {
                    array_push($this->errors, 'Valor por hora inválido!');
                }
            }else{
                array_push($this->errors, "O campo Preço por hora é obrigatório ser preenchido!");
            }

            if (isset($_POST['inputTlm'])){
                //validar tlm
                if (strlen($_POST['inputTlm']) != 9 || !is_numeric($_POST['inputTlm'])) {
                    array_push($this->errors, "Telemóvel inválido!");
                }
            }else{
                array_push($this->errors, "O campo Telemóvel é obrigatório ser preenchido!");
            }

            if (isset($_POST['inputEmail'])){
                //validar email
                if (!filter_var($_POST['inputEmail'], FILTER_VALIDATE_EMAIL)) {
                    array_push($this->errors, 'Email inválido');
                }
            }else{
                array_push($this->errors, "O campo Email é obrigatório ser preenchido!");
            }

            if (isset($_POST['inputCodPostal'])){
                //validar código postal
                if (!preg_match("/^\d{4}-\d{3}$/", $_POST['inputCodPostal'])) {
                    array_push($this->errors, 'Código postal inválido');
                }
            }else{
                array_push($this->errors, "O campo Código postal é obrigatório ser preenchido!");
            }





            // Verificar se o ID do funcionário a ser editado foi enviado
            if (isset($_POST['funcionario_id_to_edit'])) {
                $funcionarioIdToEdit = $_POST['funcionario_id_to_edit'];
                
                // Lógica para obter dados do funcionário com base no ID
                $funcionario = new Funcionario($this->connection);
                $funcionarioData = $funcionario->fetchById($funcionarioIdToEdit);

                // Você pode passar os dados do funcionário para a view de edição
                $this->view("back-pages/funcionario/edit", ['funcionario' => $funcionarioData]);
            }
        }
        
    }
}

?>