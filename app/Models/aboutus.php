<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aboutus extends Model
{
    protected $table = 'about_us';
    protected $guarded = [];

    protected $fillable = [
        'description',
        'image',
        'cvdownload'
    ];
}
