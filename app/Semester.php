<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    public $table = 'semester';
    protected $primaryKey = 'id_semester';
    protected $guarded = [];
}
