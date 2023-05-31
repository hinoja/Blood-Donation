<?php

namespace App\Http\Controllers\Extra;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class LangController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $locale): RedirectResponse
    {
        
        app()->setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }
}
