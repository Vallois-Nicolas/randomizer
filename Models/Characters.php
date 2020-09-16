<?php

class Characters extends Database {

    private $id;
    private $name;
    private $img_path;
    private $id_universe;

    public function __construct() {
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

    /**
     * Get the value of img_path
     */ 
    public function getImg_path()
    {
        return $this->img_path;
    }

    /**
     * Set the value of img_path
     *
     * @return  self
     */ 
    public function setImg_path($img_path)
    {
        $this->img_path = $img_path;

        return $this;
    }

    /**
     * Get the value of id_universe
     */ 
    public function getId_universe()
    {
        return $this->id_universe;
    }

    /**
     * Set the value of id_universe
     *
     * @return  self
     */ 
    public function setId_universe($id_universe)
    {
        $this->id_universe = $id_universe;

        return $this;
    }

    /**
     * Get all datas from tables characters and universe concerning one random character
     * 
     * @return Array
     */
    public function getOneRandomCharacter() {
        $query = "SELECT `characters`.`id` AS charId, `characters`.`name` AS charName, `characters`.`img_path` AS charPath, `universe`.`name` AS uniName FROM `characters` INNER JOIN `universe` ON `characters`.`id_universe` = `universe`.`id` ORDER BY RAND() LIMIT 1";
        $buildQuery = $this->getDb()->query($query);
        $resultQuery = $buildQuery->fetch();
        if ($resultQuery) {
            return $resultQuery;
        } else {
            return false;
        }
    }

    public function addCharacter($charName, $charPath, $universe) {
        $query = "INSERT INTO `characters` (`name`, `img_path`, `id_universe`) VALUES (:charName, :charPath, :universe)";
        $buildQuery = $this->getDb()->prepare($query);
        $buildQuery->bindValue('charName', $charName, PDO::PARAM_STR);
        $buildQuery->bindValue('charPath', $charPath, PDO::PARAM_STR);
        $buildQuery->bindValue('universe', $universe, PDO::PARAM_INT);
        if($buildQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function searchCharacterByUniverse($charName, $universe) {
        $query = "SELECT `id` FROM `characters` WHERE `name` = :charName AND `id_universe` = :universe";
        $buildQuery = $this->getDb()->prepare($query);
        $buildQuery->bindValue('charName', $charName, PDO::PARAM_STR);
        $buildQuery->bindValue('universe', $universe, PDO::PARAM_INT);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetch();
        if ($resultQuery) {
            return $resultQuery;
        } else {
            return false;
        }
    }
}