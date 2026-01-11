<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    protected $table = 'experience';
    
    protected $fillable = [
        'role_title',
        'duration',
        'company_name',
        'description'
    ];
}
