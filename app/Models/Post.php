<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    // ACCESSORS
    public function getDatelineAttribute($dateline)
    {
        return formatedLocaleDate($dateline);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
    protected $fillable=['title','user_id','slug','content'];
}
