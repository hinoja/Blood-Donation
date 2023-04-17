<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hospital extends Model
{
    use HasFactory;

    public function requirements(): HasMany
    {
        return $this->hasMany(Services::class);
    }

    // protected $fillable = ['name', 'is_active','CallNumber',''];
}
