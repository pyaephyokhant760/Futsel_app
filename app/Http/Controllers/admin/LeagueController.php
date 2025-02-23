<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    // index
    public function index()
    {
        return view('admin.index');
    }

    
}
