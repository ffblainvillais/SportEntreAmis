<?php

namespace App\Models;

use \App\Entities\Establishment as EstablishmentEntity;

class Establishment
{
    public function createEstablishment($name, $address)
    {
        $establishment = new EstablishmentEntity();

        $establishment->name    = $name;
        $establishment->address = $address;

        $establishment->save();

        return $establishment;
    }
}
