<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPage extends Model
{
    protected $table = 'detailpages';

    protected $fillable = [
        'greetings',
        'short_discription',
        'discription',
        'image',
    ];
}
