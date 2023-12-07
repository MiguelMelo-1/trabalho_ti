<?php 

class UserController {

    private $connect;
    private $connection;

    public function __construct() {

        require_once '../core/connect.php';

        require_once '../model/user.php';

        $this->connect = new connect();
        $this->connection = $this->connect->Connection();

    }

    public function index() {

        $user = new User($this->connection);

        $user = $user->fetchAll();

    }

}

?>