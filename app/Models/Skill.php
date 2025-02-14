<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $casts = [
        'technologies' => 'json'
    ];
}
