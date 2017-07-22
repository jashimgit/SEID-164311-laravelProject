<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booktitle extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'booktitle', 'authorname',
    ];
}
