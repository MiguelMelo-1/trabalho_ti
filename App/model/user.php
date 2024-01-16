<?php

namespace MVC\models;

use Exception;

class User
{

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
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    // Acessores
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAcesso()
    {
        return $this->acesso;
    }

    public function setAcesso($acesso)
    {
        $this->acesso = $acesso;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getNif()
    {
        return $this->nif;
    }

    public function setNif($nif)
    {
        $this->nif = $nif;
    }

    public function getMorada()
    {
        return $this->morada;
    }

    public function setMorada($morada)
    {
        $this->morada = $morada;
    }

    public function getCod_postal()
    {
        return $this->cod_postal;
    }

    public function setCod_postal($cod_postal)
    {
        $this->cod_postal = $cod_postal;
    }

    public function getLocalidade()
    {
        return $this->localidade;
    }

    public function setLocalidade($localidade)
    {
        $this->localidade = $localidade;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    // Métodos
    public function insert()
    {
        try {
            $query = $this->connection->prepare("INSERT INTO " . $this->table . "(nome, email, acesso, password, nif, morada, cod_postal, localidade, telefone) valorS (:nome, :email, :acesso, :password, :nif, :morada, :cod_postal, :localidade, :telefone");

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
        } catch (Exception $e) {
            echo 'Failed INSERT: ' . $e->getMessage();
            return false;
        }
    }

    public function update()
    {

        $query = $this->connection->prepare(" UPDATE " . $this->table .
            "SET 
            nome = :nome,
            email = :email,
            acesso = :acesso,
            password = :password,
            nif = :nif,
            morada = :morada,
            cod_postal = :cod_postal,
            localidade = :localidade,
            telefone = :telefone
            WHERE id = :id
        ");

        $execute = $query->execute(array(
            "nome" => $this->nome,
            "email" => $this->email,
            "acesso" => $this->acesso,
            "password" => $this->password,
            "nif" => $this->nif,
            "morada" => $this->morada,
            "cod_postal" => $this->cod_postal,
            "localidade" => $this->localidade,
            "telefone" => $this->telefone,
            "id" => $this->id
        ));

        $this->connection = null;

        return $execute;
    }

    public function fetchAll()
    {

        $query = $this->connection->prepare("SELECT * FROM " . $this->table);

        $query->execute();

        $result = $query->fetchAll();

        $this->connection = null;

        return $result;
    }

    public function fetchById($id)
    {

        $query = $this->connection->prepare(" SELECT * FROM " . $this->table . " WHERE id=:id ");

        $query->execute(array(
            "id" => $id
        ));

        $result = $query->fetchObject();

        $this->connection = null;

        return $result;
    }

    public function fetchBy($coluna, $valor)
    {

        $query = $this->connection->prepare(" SELECT * FROM " . $this->table .  " WHERE $coluna = :valor ");

        $query->execute(array(
            "valor" => $valor
        ));

        $result = $query->fetchAll();

        $this->connection = null;


        return $result;
    }

    public function deleteById($id)
    {

        try {

            $query = $this->connection->prepare("DELETE FROM " . $this->table . " WHERE id = :id");
            $query->execute(array(
                "id" => $id
            ));
            $this->connection = null;
        } catch (Exception $e) {

            echo 'Failed DELETE (deleteById): ' . $e->getMessage();
            return -1;
        }
    }

    public function deleteBy($coluna, $valor)
    {

        try {

            $query = $this->connection->prepare("DELETE FROM " . $this->table . " WHERE :coluna=:valor ");
            $query->execute(array(
                "coluna" => $coluna,
                "valor" => $valor,
            ));
            $this->connection = null;
        } catch (Exception $e) {

            echo 'Failed DELETE (deleteBy): ' . $e->getMessage();
            return -1;
        }
    }
}
