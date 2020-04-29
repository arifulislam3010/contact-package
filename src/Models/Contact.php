<?php

namespace Tutorialghor\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'message'
    ];
//    protected $quarded = [];
}
