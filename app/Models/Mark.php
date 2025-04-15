<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable = [
        'team_id',
        'match_id',
        'goal_id',
        'mark',
    ];

    
}
