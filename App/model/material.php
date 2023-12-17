<?php

namespace MVC\models;

use Exception;

class Material {

    private const TABLE_NAME = "material";
    private $connection;

    private $idMaterial;
    private $descricao;
    private $valorUni;
    private $unidade;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    // Getters

    public function getIdMaterial() {
        return $this->idMaterial;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getValorUni() {
        return $this->valorUni;
    }

    public function getUnidade() {
        return $this->unidade;
    }

    // Setters

    public function setIdMaterial($idMaterial) {
        $this->idMaterial = $idMaterial;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setValorUni($valorUni) {
        $this->valorUni = $valorUni;
    }

    public function setUnidade($unidade) {
        $this->unidade = $unidade;
    }

    // Métodos

    public function insert() {
        try {
            $query = $this->connection->prepare("INSERT INTO " . self::TABLE_NAME . " (descricao, valor_uni, unidade) VALUES (:descricao, :valorUni, :unidade)");

            $execute = $query->execute(array(
                "descricao" => $this->descricao,
                "valorUni" => $this->valorUni,
                "unidade" => $this->unidade
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
            descricao = :descricao, 
            valor_uni = :valorUni, 
            unidade = :unidade WHERE id_material = :idMaterial
            ");

            $execute = $query->execute(array(
                "descricao" => $this->descricao,
                "valorUni" => $this->valorUni,
                "unidade" => $this->unidade,
                "idMaterial" => $this->idMaterial
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