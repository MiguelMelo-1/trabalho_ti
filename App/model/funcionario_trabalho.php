<?php

namespace MVC\models;

use Exception;

class FuncionarioTrabalho {

    private $table = "funcionario_trabalho";
    private $connection;

    private $idFuncionarioTrabalho;
    private $trabalhoId;
    private $funcionarioId;
    private $nHoras;
    private $data;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    // Getters

    public function getIdFuncionarioTrabalho() {
        return $this->idFuncionarioTrabalho;
    }

    public function getTrabalhoId() {
        return $this->trabalhoId;
    }

    public function getFuncionarioId() {
        return $this->funcionarioId;
    }

    public function getNHoras() {
        return $this->nHoras;
    }

    public function getData() {
        return $this->data;
    }

    // Setters

    public function setIdFuncionarioTrabalho($idFuncionarioTrabalho) {
        $this->idFuncionarioTrabalho = $idFuncionarioTrabalho;
    }

    public function setTrabalhoId($trabalhoId) {
        $this->trabalhoId = $trabalhoId;
    }

    public function setFuncionarioId($funcionarioId) {
        $this->funcionarioId = $funcionarioId;
    }

    public function setNHoras($nHoras) {
        $this->nHoras = $nHoras;
    }

    public function setData($data) {
        $this->data = $data;
    }

    // Métodos

    public function insert() {
        try {
            $query = $this->connection->prepare("INSERT INTO " . self::TABLE_NAME . " (trabalho_id, funcionario_id, n_horas, data) VALUES (:trabalhoId, :funcionarioId, :nHoras, :data)");

            $execute = $query->execute(array(
                "trabalhoId" => $this->trabalhoId,
                "funcionarioId" => $this->funcionarioId,
                "nHoras" => $this->nHoras,
                "data" => $this->data
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
            trabalho_id = :trabalhoId, 
            funcionario_id = :funcionarioId, 
            n_horas = :nHoras, 
            data = :data WHERE id_funcionario_trabalho = :idFuncionarioTrabalho
            ");

            $execute = $query->execute(array(
                "trabalhoId" => $this->trabalhoId,
                "funcionarioId" => $this->funcionarioId,
                "nHoras" => $this->nHoras,
                "data" => $this->data,
                "idFuncionarioTrabalho" => $this->idFuncionarioTrabalho
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