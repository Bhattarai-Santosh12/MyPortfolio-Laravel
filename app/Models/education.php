<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    protected $table = 'education';

    protected $fillable = [
        'degree_name',
        'completion_year',
        'institute',
        'short_description'
    ];
}
