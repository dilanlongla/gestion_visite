<?php

namespace GestionVisites\Models;

use GestionVisites\Utilities\Crud;

class Offrir extends Crud
{
    //$param corresponds to term passed in url
    public function __construct($dbConnection, $tableName = "offrir")
    {
        parent::__construct($dbConnection, $tableName);
    }
}
