<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    use HasFactory;

    protected $fillable = [
        'adresse',
        'code_postal'
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function banques()
    {
        return $this->belongsTo(Banque::class);
    }
}
