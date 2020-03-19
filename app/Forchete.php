<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forchete extends Model
{
    protected $casts = [
        'id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
