<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coach extends Model
{
    use HasFactory , HasRoles;

    protected $fillable = ['name', 'birth_date', 'country', 'history', 'start_date', 'end_date'];
}
