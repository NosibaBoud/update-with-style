<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage($locale)
    {
        Session::put('locale', $locale);
        
        App::setLocale($locale);
        
        return redirect()->back();
    }
}
