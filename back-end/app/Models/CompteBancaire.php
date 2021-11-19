<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompteBancaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'rib',
        'numero_compte',
        'bic',
        'iban'
    ];

    public function tiers()
    {
        return $this->hasMany(Tier::class);
    }
}
