<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'title',
        'description',
        'icon',
        'link',
        'image',
    ];
}
