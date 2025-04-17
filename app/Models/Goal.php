<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = ['minute','home_team_goal_id','away_team_goal_id','home_team_player_id','away_team_player_id'];
    
}
