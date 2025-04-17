<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    protected $table = 'matches';
    protected $fillable = ['goal_id','date','time','location','home_team','away_team','league_id'];
    public $timestamps = true;
    public function homeTeam()
    {
        return $this->belongsTo('App\Models\Team','home_team');
    }
    public function awayTeam()
    {
        return $this->belongsTo('App\Models\Team','away_team');
    }
    public function league()
    {
        return $this->belongsTo('App\Models\League','league_id');
    }
    public function goal()
    {
        return $this->belongsTo('App\Models\Goal','goal_id');
    }
}
