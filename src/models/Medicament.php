<?php

namespace GestionVisites\Models;

use GestionVisites\Utilities\Crud;

class Medicament extends Crud
{
    //$param corresponds to term passed in url
    public function __construct($dbConnection, $tableName = "medicament")
    {
        parent::__construct($dbConnection, $tableName);
    }
}
