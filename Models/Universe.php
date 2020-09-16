<?php

class Universe extends Database {

    private $id;
    private $name;

    public function __construct(){
        parent::__construct();
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getAllUniverses() {
        $query = "SELECT * FROM `universe`";
        $buildQuery = $this->getDb()->query($query);
        $resultQuery = $buildQuery->fetchAll(PDO::FETCH_ASSOC);
        if ($resultQuery) {
            return $resultQuery;
        } else {
            return false;
        }
    }

    public function searchUniverse($uniName) {
        $query = "SELECT `id` FROM `universe` WHERE `name` = :name";
        $buildQuery = $this->getDb()->prepare($query);
        $buildQuery->bindValue('name', $uniName, PDO::PARAM_STR);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetch();
        if($resultQuery) {
            return $resultQuery;
        } else {
            return false;
        }
    }

    public function addUniverse($uniName) {
        $query = "INSERT INTO `universe` (`name`) VALUE (:uniName)";
        $buildQuery = $this->getDb()->prepare($query);
        $buildQuery->bindValue('uniName', $uniName, PDO::PARAM_STR);
        if($buildQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }
}