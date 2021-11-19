<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'nom',
        'taux_remise',
        'fodec',
        'timbre',
        'tva'
    ];

    public function coordonnee()
    {
        return $this->belongsTo(Coordonnee::class);
    }

    public function exonoration()
    {
        return $this->belongsTo(Exonoration::class);
    }

    public function compte_bancaire()
    {
        return $this->belongsTo(CompteBancaire::class);
    }

    public function typesTier()
    {
        return $this->belongsToMany(TypeTier::class, 'tier_type_tier');
    }


}
