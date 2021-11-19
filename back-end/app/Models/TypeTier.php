<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTier extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'designation',
        'has_remise',
        'has_fodec',
        'has_exonoration',
        'has_timber',
        'has_tva',
    ];

    public function tiers()
    {
        return $this->belongsToMany(Tier::class, 'tier_type_tier');
    }
}
