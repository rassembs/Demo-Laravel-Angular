<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordonnee extends Model
{
    use HasFactory;

    public function tiers()
    {
        return $this->hasMany(Tier::class);
    }

    public function informations()
    {
        return $this->belongsToMany(Information::class);
    }
}
