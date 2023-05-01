<?php

namespace App\Models;

use App\Models\User;
use App\Models\Donor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointement extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'hospital_id', 'start'];
    // public function appointements()
    // {
    //     return $this->hasMany(Appointement::class);
    // }
    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
