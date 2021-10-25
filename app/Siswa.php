<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $table = 'data_siswa';
    protected $primaryKey = 'id_siswa';
    protected $guarded = [
        'name',
        'email',
        'password',
    ];
}
