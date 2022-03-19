<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commune extends Model
{
    protected $fillable = ['nom', 'departement_id'];
    public function departement()
    {
        return $this->BelongsTo(Departement::class);
    }
    public function quartiers()
    {
        return $this->hasMany(Quartier::class);
    }
}
