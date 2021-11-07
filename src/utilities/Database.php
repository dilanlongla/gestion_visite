<?php

namespace GestionVisites\Utilities;

class Database
{

    private $port = 3306;
    private $host = 'localhost';
    private $database = 'ges_visites';
    private $user = 'root';
    private $password = '';
    public function __construct()
    {
        $host = $this->host;
        $port = $this->port;
        $db   = $this->database;
        $user = $this->user;
        $pass = $this->password;

        try {
            $this->dbConnection = new \PDO(
                "mysql:host=$host;port=$port;dbname=$db",
                $user,
                $pass
            );
        } catch (\PDOException $e) {

            exit('error : ' . $e->getMessage('An error occured check connection to db'));
        }
    }

    public function connect()
    {
        return $this->dbConnection;
    }

    public function newConnection($host, $port, $database, $user, $password)
    {
        //setting new connection variables
        $this->host = $host;
        $this->port = $port;
        $this->database = $database;
        $this->user = $user;
        $this->password = $password;
    }
}
