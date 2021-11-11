<?php

namespace GestionVisites\Models;

use GestionVisites\Utilities\Crud;

class Rapport extends Crud
{
    //$param corresponds to term passed in url
    public function __construct($dbConnection, $tableName = "rapport")
    {
        parent::__construct($dbConnection, $tableName);
    }

    public function findByDate($var)
    {
        $query = " SELECT * FROM " . $this->tableName . " WHERE date(date) ='$var'; ";

        try {
            $statement = $this->dbConnection->prepare($query);
            $statement->execute(array('var' => $var));
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}
