<?php

namespace App\Models;

use App\Models\Appointement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donor extends Model
{
    use HasFactory;

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'userable');
    }
    public function appointements()
    {
        return $this->hasMany( Appointement::class);
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
