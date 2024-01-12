<?php

namespace MVC\models;

use Exception;

class Trabalho {

    private $table = "trabalho";
    private $connection;

    private $id;
    private $estado;
    private $tipoTrabalho;
    private $nome;
    private $morada;
    private $nif;
    private $codPostal;
    private $localidade;
    private $email;
    private $tlm;
    private $descricao;
    private $observacoes;
    private $total;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    // Getters

    public function getId() {
        return $this->id;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getTipoTrabalho() {
        return $this->tipoTrabalho;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getMorada() {
        return $this->morada;
    }

    public function getNif() {
        return $this->nif;
    }

    public function getCodPostal() {
        return $this->codPostal;
    }

    public function getLocalidade() {
        return $this->localidade;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTlm() {
        return $this->tlm;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getObservacoes() {
        return $this->observacoes;
    }

    public function getTotal() {
        return $this->total;
    }

    // Setters

    public function setId($id) {
        $this->id = $id;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setTipoTrabalho($tipoTrabalho) {
        $this->tipoTrabalho = $tipoTrabalho;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setMorada($morada) {
        $this->morada = $morada;
    }

    public function setNif($nif) {
        $this->nif = $nif;
    }

    public function setCodPostal($codPostal) {
        $this->codPostal = $codPostal;
    }

    public function setLocalidade($localidade) {
        $this->localidade = $localidade;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTlm($tlm) {
        $this->tlm = $tlm;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

// Métodos
public function insert() {
    try {
        $query = $this->connection->prepare("INSERT INTO " . $this->table . " 
            (estado, tipo_trabalho, nome, morada, nif, cod_postal, localidade, email, tlm, descricao, observacoes, total) 
            VALUES (:estado, :tipoTrabalho, :nome, :morada, :nif, :codPostal, :localidade, :email, :tlm, :descricao, :observacoes, :total)");

        $execute = $query->execute(array(
            "estado" => $this->estado,
            "tipoTrabalho" => $this->tipoTrabalho,
            "nome" => $this->nome,
            "morada" => $this->morada,
            "nif" => $this->nif,
            "codPostal" => $this->codPostal,
            "localidade" => $this->localidade,
            "email" => $this->email,
            "tlm" => $this->tlm,
            "descricao" => $this->descricao,
            "observacoes" => $this->observacoes,
            "total" => $this->total
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
        $query = $this->connection->prepare("UPDATE " . $this->table . " SET 
            estado = :estado,
            tipo_trabalho = :tipoTrabalho,
            nome = :nome,
            morada = :morada,
            nif = :nif,
            cod_postal = :codPostal,
            localidade = :localidade,
            email = :email,
            tlm = :tlm,
            descricao = :descricao,
            observacoes = :observacoes,
            total = :total
            WHERE id_trabalho = :id");

        $execute = $query->execute(array(
            "estado" => $this->estado,
            "tipoTrabalho" => $this->tipoTrabalho,
            "nome" => $this->nome,
            "morada" => $this->morada,
            "nif" => $this->nif,
            "codPostal" => $this->codPostal,
            "localidade" => $this->localidade,
            "email" => $this->email,
            "tlm" => $this->tlm,
            "descricao" => $this->descricao,
            "observacoes" => $this->observacoes,
            "total" => $this->total,
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

    $query = $this->connection->prepare(" SELECT * FROM ". $this->table . " WHERE id_trabalho =:id ");

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

        $query = $this->connection->prepare("DELETE FROM " . $this->table . " WHERE id_trabalho = :id");
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

        $query = $this->connection->prepare("DELETE FROM " . $this->table . " WHERE $coluna =:valor ");
        $query->execute(array(
            "valor" => $valor
        ));
        $this->connection = null;

    } catch (Exception $e) {

        echo 'Failed DELETE (deleteBy): ' . $e->getMessage();
        return -1;

    }
}


}

?>