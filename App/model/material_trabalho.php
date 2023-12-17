<?php

namespace MVC\models;

use Exception;

class MaterialTrabalho {

    private $table = "material_trabalho";
    private $connection;

    private $id;
    private $trabalhoId;
    private $idMaterial;
    private $quantidade;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    // Getters

    public function getId() {
        return $this->id;
    }

    public function getTrabalhoId() {
        return $this->trabalhoId;
    }

    public function getIdMaterial() {
        return $this->idMaterial;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    // Setters

    public function setId($id) {
        $this->id = $id;
    }

    public function setTrabalhoId($trabalhoId) {
        $this->trabalhoId = $trabalhoId;
    }

    public function setIdMaterial($idMaterial) {
        $this->idMaterial = $idMaterial;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    // Métodos

    public function insert() {
        try {
            $query = $this->connection->prepare("INSERT INTO " . $this->table . " (trabalho_id, id_material, quantidade) VALUES (:trabalhoId, :idMaterial, :quantidade)");

            $execute = $query->execute(array(
                "trabalhoId" => $this->trabalhoId,
                "idMaterial" => $this->idMaterial,
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
            $query = $this->connection->prepare("UPDATE " . $this->table . 
            " SET 
            trabalho_id = :trabalhoId, 
            id_material = :idMaterial, 
            quantidade = :quantidade WHERE id = :id
            ");

            $execute = $query->execute(array(
                "trabalhoId" => $this->trabalhoId,
                "idMaterial" => $this->idMaterial,
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