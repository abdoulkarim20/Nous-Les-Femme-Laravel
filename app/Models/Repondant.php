<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repondant extends Model
{
    public function entreprises()
    {
        return $this->hasMany(Entreprise::class);
    }
}
