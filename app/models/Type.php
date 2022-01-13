<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'water_type';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'minerals',
    ];
}
