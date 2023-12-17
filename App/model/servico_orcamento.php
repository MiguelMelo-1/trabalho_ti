<?php

namespace MVC\models;

use Exception;

class ServicoOrcamento {

    private $table = "servico_orcamento";
    private $connection;

    private $id;
    private $orcamentoId;
    private $idServico;
    private $quantidade;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    // Getters

    public function getId() {
        return $this->id;
    }

    public function getOrcamentoId() {
        return $this->orcamentoId;
    }

    public function getIdServico() {
        return $this->idServico;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    // Setters

    public function setId($id) {
        $this->id = $id;
    }

    public function setOrcamentoId($orcamentoId) {
        $this->orcamentoId = $orcamentoId;
    }

    public function setIdServico($idServico) {
        $this->idServico = $idServico;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    // Métodos

    public function insert() {
        try {
            $query = $this->connection->prepare("INSERT INTO " . self::TABLE_NAME . " (orcamento_id, id_servico, quantidade) VALUES (:orcamentoId, :idServico, :quantidade)");

            $execute = $query->execute(array(
                "orcamentoId" => $this->orcamentoId,
                "idServico" => $this->idServico,
                "quantidade" => $this->quantidade
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
            $query = $this->connection->prepare("UPDATE " . self::TABLE_NAME . 
            " SET 
            orcamento_id = :orcamentoId, 
            id_servico = :idServico, 
            quantidade = :quantidade WHERE id = :id
            ");

            $execute = $query->execute(array(
                "orcamentoId" => $this->orcamentoId,
                "idServico" => $this->idServico,
                "quantidade" => $this->quantidade,
                "id" => $this->id
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