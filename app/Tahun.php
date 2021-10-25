<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    public $table = 'tahun_ajaran';
    protected $primaryKey = 'id_tahun';
    protected $guarded = [];
}
