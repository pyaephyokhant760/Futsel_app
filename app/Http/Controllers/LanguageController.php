<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    
    public function language(Request $request)
    {
        $lang = $request->lang;
        Session::put('locale', $lang);
        App::setLocale(Session::get('locale'));
        return back();
    }
}
