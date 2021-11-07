
<?php

namespace GestionVisites\Models;

use GestionVisites\Utilities\Crud;

class Visiteur extends Crud
{
    //$param corresponds to term passed in url
    public function __construct($dbConnection, $requestMethod, $tableName = "visiteur")
    {
        parent::__construct($dbConnection, $requestMethod, $tableName);
    }
}
