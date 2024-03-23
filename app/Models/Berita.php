<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita'; //menentukan nama tabel
    protected $primaryKey = 'id_berita'; //menentukan primary key
    protected $guard = 'id_berita'; //melindungi agar kolom tidak diisi

}
