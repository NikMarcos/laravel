<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account_data extends Model
{
    protected $fillable = ['login', 'password', 'name', 'age'];
    protected $table = 'account';
}
