<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id("id_penduduk");
            $table->string("nik");
            $table->string("nama_penduduk");
            $table->date("tgl_lahir");
            $table->enum("jenis_kelamin", ['P', 'L']);
            $table->string("alamat");
            $table->string("email");
            $table->string("no_telepon");
            $table->string("password");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk');
    }
};
