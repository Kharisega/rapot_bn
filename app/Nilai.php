<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    public $table = 'tabel_nilai';
    protected $primaryKey = 'id_nilai';
    protected $guarded = [];
}
