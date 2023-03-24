<?php

namespace App\Http\Livewire\Front\Lang;

use Livewire\Component;

class Change extends Component
{
    public $locale="test";
    public function ChangeLang($local)
    {
        // dd("test");
        app()->setlocale($local);
        session()->put('locale', $local);
        // dd($locale);
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.front.lang.change');
    }
}
