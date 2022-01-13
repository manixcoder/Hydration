<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{
    protected $table = 'volume';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantity',
    ];
}
