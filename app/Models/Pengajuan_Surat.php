<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan_Surat extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_surat'; //menentukan nama tabel
    protected $primaryKey = 'id_pengajuan_surat'; //menentukan primary key
    protected $guard = 'id_pengajuan_surat'; //melindungi agar kolom tidak diisi

}
