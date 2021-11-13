<?php

namespace GestionVisites\Models;

use GestionVisites\Utilities\Crud;

class Visiteur extends Crud
{
    //$param corresponds to term passed in url
    public function __construct($dbConnection, $tableName = "visiteur")
    {
        parent::__construct($dbConnection, $tableName);
    }

    public function loginUnique($login)
    {
        $query = " SELECT * FROM " . $this->tableName . " WHERE login=:login";

        try {
            $statement = $this->dbConnection->prepare($query);
            $statement->execute(
                array(
                    'login' => $login
                )
            );
            $result = $statement->fetch(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
    public function register($input)
    {
        return parent::create($input);
    }

    public function login($login, $mdp)
    {
        $query = " SELECT * FROM " . $this->tableName . " WHERE login=:login and mdp=:mdp";

        try {
            $statement = $this->dbConnection->prepare($query);
            $statement->execute(
                array(
                    'login' => $login,
                    'mdp' => $mdp
                )
            );
            $result = $statement->fetch(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}
