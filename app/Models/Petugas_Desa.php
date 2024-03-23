<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas_Desa extends Model
{
    use HasFactory;

    protected $table = 'petugas_desa'; //menentukan nama tabel
    protected $primaryKey = 'id_petugas_desa'; //menentukan primary key
    protected $guard = 'id_petugas'; //melindungi agar kolom tidak diisi

    protected $hidden = 'password'; //untukn menyembunyikan sebuah kolom
}
