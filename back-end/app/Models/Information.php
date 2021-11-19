<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation',
        'valeur'
    ];

    public function coordonnees()
    {
        return $this->belongsToMany(Coordonnee::class);
    }
}
