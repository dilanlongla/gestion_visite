
<?php

namespace GestionVisites\Models;

use GestionVisites\Utilities\Crud;

class Rapport extends Crud
{
    //$param corresponds to term passed in url
    public function __construct($dbConnection, $requestMethod, $tableName = "rapport")
    {
        parent::__construct($dbConnection, $requestMethod, $tableName);
    }
}
