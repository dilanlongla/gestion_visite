
<?php

namespace GestionVisites\Models;

use GestionVisites\Utilities\Crud;

class Famille extends Crud
{
    //$param corresponds to term passed in url
    public function __construct($dbConnection, $requestMethod, $tableName = "famille")
    {
        parent::__construct($dbConnection, $requestMethod, $tableName);
    }
}