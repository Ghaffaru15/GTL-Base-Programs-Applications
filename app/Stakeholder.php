<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stakeholder extends Model
{
    //
    protected $fillable = ['name','company','designation','contact','email'];
}
