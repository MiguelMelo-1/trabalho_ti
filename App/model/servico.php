<?php

namespace MVC\models;

use Exception;

class Servico {

    private $table = "servico";
    private $connection;

    private $idServico;
    private $descricao;
    private $valorUni;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    // Getters

    public function getIdServico() {
        return $this->idServico;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getValorUni() {
        return $this->valorUni;
    }

    // Setters

    public function setIdServico($idServico) {
        $this->idServico = $idServico;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setValorUni($valorUni) {
        $this->valorUni = $valorUni;
    }

    // Métodos

    public function insert() {
        try {
            $query = $this->connection->prepare("INSERT INTO " . $this->table . " (descricao, valor_uni) VALUES (:descricao, :valorUni)");

            $execute = $query->execute(array(
                "descricao" => $this->descricao,
                "valorUni" => $this->valorUni
            ));

            $this->connection = null;

            return $execute;
        } catch (Exception $e) {
            echo 'Failed INSERT: ' . $e->getMessage();
            return false;
        }
    }

    public function update() {
        try {
            $query = $this->connection->prepare("UPDATE " . $this->table . 
            " SET 
            descricao = :descricao, 
            valor_uni = :valorUni WHERE id_servico = :idServico
            ");

            $execute = $query->execute(array(
                "descricao" => $this->descricao,
                "valorUni" => $this->valorUni,
                "idServico" => $this->idServico
            ));

            $this->connection = null;

            return $execute;
        } catch (Exception $e) {
            echo 'Failed UPDATE: ' . $e->getMessage();
            return false;
        }
    }

    public function fetchAll() {
       
        $query = $this->connection->prepare("SELECT * FROM " . $this->table);

        $query->execute();

        $result = $query->fetchAll();

        $this->connection = null;

        return $result;

    }

    public function fetchById($id) {

        $query = $this->connection->prepare(" SELECT * FROM ". $this->table . " WHERE id=:id ");

        $query->execute(array(
            "id" => $id
        ));

        $result = $query->fetchObject();

        $this->connection = null;

        return $result;

    }

    public function fetchBy($coluna, $valor) {

        $query = $this->connection->prepare(" SELECT * FROM " . $this->table .  " WHERE $coluna = :valor " ); 

        $query->execute(array(
            "valor" => $valor
        ));

        $result = $query->fetchAll();

        $this->connection = null;


        return $result;

    }

    public function deleteById($id){

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
    
    public function deleteBy($coluna,$valor){

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