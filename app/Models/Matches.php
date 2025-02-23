<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    protected $table = 'matches';
    protected $fillable = ['date','location','home_team','away_team','home_score','away_score'];
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
