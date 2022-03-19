<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $fillable = [
        'nom',
        'nomEntreprise',
        'conrdonneeGPS',
        'siegeSociale',
        'dateCreation',
        'registreCommerce',
        'NINEA',
        'pageWeb',
        'nombreEmployer',
        'contratFormel',
        'organigrammeRespecter',
        'dispositifFormation',
        'questionSociale',
        'quartier_id',
        'domaine_id',
        'repondant_id',
        'regime_juridique_id'
    ];
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
