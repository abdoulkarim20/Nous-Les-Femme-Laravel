<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['nom', 'supperfice'];
    public function departements()
    {
        return $this->hasMany(Departement::class);
    }
}
