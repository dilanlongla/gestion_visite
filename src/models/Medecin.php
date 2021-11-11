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
}
