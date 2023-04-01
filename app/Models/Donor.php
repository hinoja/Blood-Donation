<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Donor extends Model
{
    use HasFactory;

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'userable');
    }

    const TYPES = [
        1 => 'A+',
        2 => 'A-',
        3 => '0+',
        4 => '0-',
        5 => 'AB+',
        6 => 'AB-',
    ];
}
