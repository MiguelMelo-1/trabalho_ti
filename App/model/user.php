<?php

class User {

    // Variaveis
    private $table = "user";
    private $connection;

    private $id;
    private $nome;
    private $email;
    private $acesso;
    private $password;
    private $nif;
    private $morada;
    private $cod_postal;
    private $localidade;
    private $telefone;

    // Construtor
    public function __construct($connection) {
        $this->connection = $connection;
    }

    // Acessores
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getAcesso() {
        return $this->acesso;
    }

    public function setAcesso($acesso) {
        $this->acesso = $acesso;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getNif() {
        return $this->nif;
    }

    public function setNif($nif) {
        $this->nif = $nif;
    }

    public function getMorada() {
        return $this->morada;
    }

    public function setMorada($morada) {
        $this->morada = $morada;
    }

    public function getCod_postal() {
        return $this->cod_postal;
    }

    public function setCod_postal($cod_postal) {
        $this->cod_postal = $cod_postal;
    }

    public function getLocalidade() {
        return $this->localidade;
    }

    public function setLocalidade($localidade) {
        $this->localidade = $localidade;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    // Métodos
    public function insert() {

        $query = $this->connection->prepare("INSERT INTO " . $this->table . "(nome, email, acesso, password, nif, morada, cod_postal, localidade, telefone) VALUES (:nome, :email, :acesso, :password, :nif, :morada, :cod_postal, :localidade, :telefone");

        $execute = $query->execute(array(
            "nome" => $this->nome,
            "email" => $this->email,
            "acesso" => $this->acesso,
            "password" => $this->password,
            "nif" => $this->nif,
            "morada" => $this->morada,
            "cod_postal" => $this->cod_postal,
            "localidade" => $this->localidade,
            "telefone" => $this->telefone
        ));

        $this->connection = null;

        return $execute;

    }

    public function update() {
        
        $query = $this->connection->prepare(" UPDATE " . $this->table . "SET 
            name = :name,
            email = :email,
            acesso = :acesso,
            password = :password,
            nif = :nif,
            morada = :morada,
            
        ")

    }

}

?>