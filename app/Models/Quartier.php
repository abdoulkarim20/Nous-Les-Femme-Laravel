<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quartier extends Model
{
    protected $fillable = ['nom', 'commune_id'];
    public function commune()
    {
        return $this->BelongsTo(Commune::class);
    }
}
