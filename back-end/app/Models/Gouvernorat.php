<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gouvernorat extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'designation'
    ];

    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }

    public function regions()
    {
        return $this->hasMany(Region::class);
    }
}
