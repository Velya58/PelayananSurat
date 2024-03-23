<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $table = 'permohonan'; //menentukan nama tabel
    protected $primaryKey = 'id_permohonan'; //menentukan primary key
    protected $guard = 'id_permohonan'; //melindungi agar kolom tidak diisi

}
