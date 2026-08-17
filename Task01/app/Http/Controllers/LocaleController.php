<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function switch(string $lang): RedirectResponse
    {
        session()->put('locale', $lang);
        
        return redirect()->back();
    }
}