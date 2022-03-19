<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $fillable = ['nom'];
    public function domaine()
    {
        return $this->belongsTo(Domaine::class);
    }
    public function regime_juridique()
    {
        return $this->belongsTo(RegimeJuridique::class);
    }
    public function repondant()
    {
        return $this->belongsTo(Repondant::class);
    }
    public function quartier()
    {
        return $this->belongsTo(Quartier::class);
    }
}
