<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    protected $table = 'matches';
    protected $fillable = ['date','time','location','home_team','away_team','league_id'];
    public $timestamps = true;
    public function homeTeam()
    {
        return $this->belongsTo('App\Models\Teams','home_team');
    }
    public function awayTeam()
    {
        return $this->belongsTo('App\Models\Teams','away_team');
    }
}
