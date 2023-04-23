<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Services extends Model
{
    use HasFactory;
    protected $fillable = ['name'];


    public function job(): BelongsTo
    {
        return $this->belongsTo(Hospital::class);
    }
}
