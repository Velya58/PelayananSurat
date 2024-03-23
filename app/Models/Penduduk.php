<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $table = 'penduduk'; //menentukan nama tabel
    protected $primaryKey = 'id_penduduk'; //menentukan primary key
    protected $guard = 'id_penduduk'; //melindungi agar kolom tidak diisi

    protected $hidden = 'password'; //untukn menyembunyikan sebuah kolom
}
