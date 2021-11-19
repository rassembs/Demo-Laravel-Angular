<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'designation',
    ];

    public function adresses()
    {
        return $this->hasMany(Adresse::class);
    }

    public function gouvernorat()
    {
        return $this->belongsTo(Gouvernorat::class);
    }
}
