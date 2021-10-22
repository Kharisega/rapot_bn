<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    public $table = 'tabel_tugas';
    protected $primaryKey = 'id_tugas';
    protected $guarded = [];
}
