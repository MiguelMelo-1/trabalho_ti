<?php

namespace MVC\models;

use Exception;

class Funcionario
{

    // Variaveis
    private $table = "funcionario";
    private $connection;

    private $id;
    private $nome;
    private $nif;
    private $dataNascimento;
    private $precoHora;
    private $tlm;
    private $email;
    private $localidade;
    private $codPostal;

    // Construtor
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    // Acessores
    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getNif()
    {
        return $this->nif;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function getPrecoHora()
    {
        return $this->precoHora;
    }

    public function getTlm()
    {
        return $this->tlm;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getLocalidade()
    {
        return $this->localidade;
    }

    public function getCodPostal()
    {
        return $this->codPostal;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setNif($nif)
    {
        $this->nif = $nif;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function setPrecoHora($precoHora)
    {
        $this->precoHora = $precoHora;
    }

    public function setTlm($tlm)
    {
        $this->tlm = $tlm;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setLocalidade($localidade)
    {
        $this->localidade = $localidade;
    }

    public function setCodPostal($codPostal)
    {
        $this->codPostal = $codPostal;
    }

    // Métodos
    public function insert()
    {
        try {
            $query = $this->connection->prepare("INSERT INTO " . $this->table . " (id, nome, nif, data_nascimento, preco_hora, tlm, email, localidade, cod_postal) VALUES (:id, :nome, :nif, :dataNascimento, :precoHora, :tlm, :email, :localidade, :codPostal)");

            $execute = $query->execute(array(
                "id" => $this->id,
                "nome" => $this->nome,
                "nif" => $this->nif,
                "dataNascimento" => $this->dataNascimento,
                "precoHora" => $this->precoHora,
                "tlm" => $this->tlm,
                "email" => $this->email,
                "localidade" => $this->localidade,
                "codPostal" => $this->codPostal
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
        try {
            $query = $this->connection->prepare("UPDATE " . $this->table .
                " SET 
                nome = :nome,
                nif = :nif,
                data_nascimento = :dataNascimento,
                preco_hora = :precoHora,
                tlm = :tlm,
                email = :email,
                localidade = :localidade,
                cod_postal = :codPostal WHERE id = :id
        ");

            $execute = $query->execute(array(
                "nome" => $this->nome,
                "nif" => $this->nif,
                "dataNascimento" => $this->dataNascimento,
                "precoHora" => $this->precoHora,
                "tlm" => $this->tlm,
                "email" => $this->email,
                "localidade" => $this->localidade,
                "codPostal" => $this->codPostal,
                "id" => $this->id
            ));

            $this->connection = null;

            return $execute;
        } catch (Exception $e) {
            echo 'Failed INSERT: ' . $e->getMessage();
            return false;
        }
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

        $query = $this->connection->prepare(" SELECT * FROM " . $this->table . " WHERE $coluna = :valor ");

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

?>