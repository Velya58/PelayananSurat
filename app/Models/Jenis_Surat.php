<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Surat extends Model
{
    use HasFactory;

    protected $table = 'jenis_surat'; //menentukan nama tabel
    protected $primaryKey = 'id_jenis_surat'; //menentukan primary key
    protected $guard = 'id_jenis_surat'; //melindungi agar kolom tidak diisi

}
