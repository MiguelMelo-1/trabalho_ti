<?php

namespace MVC\controllers;

require_once SITE_ROOT . '/App/controller/controller.php';
require_once SITE_ROOT . '/App/core/connect.php';
require_once SITE_ROOT . '/App/model/user.php';

use MVC\Controller;
use MVC\connect;
use MVC\models\User;

class AuthController extends Controller
{

    private $connect;
    private $connection;

    public function __construct()
    {

        $this->connect = new connect();

        $this->connection = $this->connect->Connection();
    }

    public function verifyLogin()
    {
        $errors = array();

        if (isset($_POST['btn-login'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty($email)) { array_push($errors, "Email é obrigatório"); }
            if (empty($password)){ array_push($errors, "Password é obrigatório"); }

            if (count($errors) == 0) {
                $user = new User($this->connection);
    
                $user = $user->fetchBy("email", $email);
                
                if (!empty($user)) {
                    if ($password == $user[0]['password']){
 
                        //session variables
                        $_SESSION['id'] = $user[0]['id'];
                        $_SESSION['nome'] = $user[0]['nome'];
                        $_SESSION['email'] = $user[0]['email'];
                        $_SESSION['acesso'] = $user[0]['acesso'];
                        $_SESSION['nif'] = $user[0]['nif'];
                        $_SESSION['morada'] = $user[0]['morada'];
                        $_SESSION['cod_postal'] = $user[0]['cod_postal'];
                        $_SESSION['localidade'] = $user[0]['localidade'];
                        $_SESSION['telefone'] = $user[0]['telefone'];

                        header("location: /trabalho_ti/private");
                    }else {
                        array_push($errors, "Senha incorreta");
                    }
                }else{
                    array_push($errors, "Usuário não encontrado");
                }   
            }
        }

            if (!empty($errors)) {
                foreach ($errors as $error) {
                    echo $error . "<br>";
                }
                header("location: /trabalho_ti/login");
            }
    }

    public function logout(){
        session_destroy();
        
        header("location: /trabalho_ti/public/");
    }


    public function verifyRegister()
    {
    }
}