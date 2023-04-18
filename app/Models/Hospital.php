<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Services;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hospital extends Model
{
    use HasFactory;

    public function services(): HasMany
    {
        return $this->hasMany(Services::class);
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
