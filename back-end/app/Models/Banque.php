<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banque extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation',
        'logo',
        'code_banque',
        'code_agence'
    ];

    public function adresse()
    {
        return $this->belongsTo(Adresse::class);
    }
}
