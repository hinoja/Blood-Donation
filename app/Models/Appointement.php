<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Donor;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointement extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'hospital_id', 'start','is_validated'];
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
    // ACCESSORS
    public function FormatDate($dateline)
    {
        $locale = app()->getLocale();
        Carbon::setLocale($locale);
        $format = $locale === 'en' ? 'F d, Y' : 'd M Y';

        return $dateline ? Carbon::parse($dateline)->translatedFormat($format) : null;
    }

}
