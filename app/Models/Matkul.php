<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table        = 'matkul'; 
    protected $fillable     = ['kode_matkul', 'nama_matkul', 'sks'];
    public $timestamps      = false;
}
