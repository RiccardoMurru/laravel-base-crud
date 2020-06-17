<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Janitor extends Model
{
    protected $fillable = ['name', 'task', 'description'];
}
