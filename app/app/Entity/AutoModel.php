<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class AutoModel extends Model
{
    public $timestamps = false;

    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }

    public function autoGenerations()
    {
        return $this->hasMany(AutoGeneration::class);
    }
}
