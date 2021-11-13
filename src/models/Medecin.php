<?php

namespace GestionVisites\Models;

use GestionVisites\Utilities\Crud;

class Medecin extends Crud
{
    //$param corresponds to term passed in url
    public function __construct($dbConnection, $tableName = "medecin")
    {
        parent::__construct($dbConnection, $tableName);
    }

    public function findByNom($nom)
    {
        $query = " SELECT * FROM " . $this->tableName . " WHERE nom like '%$nom%'; ";

        try {
            $statement = $this->dbConnection->prepare($query);
            $statement->execute(array('var' => $nom));
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
    
}
