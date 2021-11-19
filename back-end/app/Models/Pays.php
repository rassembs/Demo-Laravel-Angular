<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'designation',
        'phone_code'
    ];

    public function gouvernorats()
    {
        return $this->hasMany(Gouvernorat::class);
    }
}
