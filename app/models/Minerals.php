<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Minerals extends Model
{
    protected $table = 'minerals';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'minerals_name',
    ];
}
