<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exonoration extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'date_debut',
        'date_fin',
        'numero'
    ];

    public function tiers()
    {
        return $this->hasMany(Tier::class);
    }
}
