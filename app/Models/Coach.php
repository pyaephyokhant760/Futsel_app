<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable = ['first_name', 'last_name', 'birth_date', 'country', 'history', 'start_date', 'end_date'];
}
