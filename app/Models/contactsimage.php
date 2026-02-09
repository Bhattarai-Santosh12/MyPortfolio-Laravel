<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactsImage extends Model
{
    protected $table = 'contactimage';

    protected $fillable = [
        'image',
    ];
}
