<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'emp';
    protected $fillable=['empname','department'];
    public $timestamps = false;
}
