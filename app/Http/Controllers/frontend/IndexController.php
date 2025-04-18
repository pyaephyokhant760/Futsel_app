<?php

namespace App\Http\Controllers\frontend;

use App\Models\Matches;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(Request $request) {

        $matches = [];
    
        // Get all matches from -5 to +5 days for UI
        for ($i = -5; $i <= 5; $i++) {
            $dateKey = now()->copy()->addDays($i)->format('Y-m-d');
            $matches[$dateKey] = Matches::whereDate('date', $dateKey)->get();
        }
    
        // Get selected date from request
        $date = $request->input('date');
    

        // Get all matches on that date
        $dates = Matches::select()
                ->with(['homeTeam', 'awayTeam', 'league', 'goal'])
                ->whereDate('date', $date)
                ->get();
        
        $dates = $dates->groupBy('league_id');
        // dd($dates->toArray());
        // Show grouped data
        return view('user.index', compact('matches', 'dates'));
    }
    
    public function matches($id) {
        $datas = Matches::where('id', $id)->with(['homeTeam', 'awayTeam', 'league', 'goal'])->first();
        // dd($datas->toArray());
        return view('user.match');
    }
}
