<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rencana extends Model
{
    public $table = 'penilaian';
    protected $primaryKey = 'id_penilaian';
    protected $guarded = [];
}
