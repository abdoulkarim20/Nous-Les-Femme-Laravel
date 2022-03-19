<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    protected $fillable = ['nom'];
    public function entreprises()
    {
        return $this->hasMany(Entreprise::class);
    }
}
