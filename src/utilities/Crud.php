<?php

namespace GestionVisites\Utilities;

abstract class Crud
{
    private $dbConnection;
    private $path;
    private $tableName;

    //constructor
    public function __construct($dbConnection, $tableName, $tableId = 'id')
    {
        $this->dbConnection = $dbConnection;
        $this->tableName = $tableName;
        $this->tableId = $tableId;
    }

    protected function setPath($path)
    {
        $this->path = $path;
    }

    protected function findAll()
    {
        $query = " SELECT * FROM " . $this->tableName . ";";
        try {
            $statement = $this->dbConnection->query($query);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }

        return $result;
    }

    protected function findById($id)
    {
        $query = " SELECT * FROM " . $this->tableName . " WHERE " . $this->params['id'] . " = :id; ";

        try {
            $statement = $this->dbConnection->prepare($query);
            $statement->execute(array('id' => $id));
            $result = $statement->fetch(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    protected function findByPath($var)
    {
        $query = " SELECT * FROM " . $this->tableName . " WHERE " . $this->path . " = :id; ";

        try {
            $statement = $this->dbConnection->prepare($query);
            $statement->execute(array('id' => $var));
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }



    protected function create($input)
    {
        //preparing fields
        $fields = "";
        if (!is_null($input)) {
            foreach (array_keys($input) as $key => $value) {
                if ($fields == "") {
                    $fields = $value;
                } else {
                    $fields = $fields . "," . $value;
                }
            }
        } else {
            return false;
        }

        //preparing values
        $values = "";
        if (!is_null($input)) {
            foreach ($input as $key => $value) {
                if ($values == "") {
                    $values = ":" . $key;
                } else {
                    $values = $values . ", :" . $key;
                }
            }
        } else {
            return false;
        }

        $query = " INSERT INTO " . $this->tableName . " (" . $fields . ") VALUES (" . $values . ");";

        //execute array
        $preparedfields = array();
        foreach ($input as $key => $value) {
            $preparedfields[$key] = $input[$key];
        }

        try {
            $statement = $this->dbConnection->prepare($query);
            $result = $statement->execute($preparedfields);
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
        return $result;
    }

    protected function update($id, $input)
    {
        $result = $this->findById($id);
        if (!$result) {
            return false;
        }

        //prepare set of update statement
        $set = "";
        foreach ($input as $key => $value) {
            if ($set == "") {
                $set = " SET " . $key . " = :" . $key;
            } else {
                $set = $set . "," . $key . " = :" . $key;
            }
        }

        $statement = " UPDATE " . $this->tableName . $set . " WHERE " . $this->params['id'] . " = :id;";

        //execute array
        $preparedfields = array();
        $preparedfields['id'] = (int) $id;
        foreach ($input as $key => $value) {
            $preparedfields[$key] = $input[$key];
        }

        try {
            $statement = $this->dbConnection->prepare($statement);
            $statement->execute($preparedfields);
            $result = $statement->rowCount();
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }

        return $result;
    }


    protected function delete($id)
    {
        $result = $this->findByPath($id);
        if (!$result) {
            return false;
        }

        $query = " DELETE FROM " . $this->tableName . " WHERE " . $this->path . " = :id; ";

        try {
            $statement = $this->dbConnection->prepare($query);
            $result = $statement->execute(array('id' => (int)$id));
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }

        return $result;
    }
}
