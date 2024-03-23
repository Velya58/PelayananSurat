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
        Schema::create('petugas_desa', function (Blueprint $table) {
            $table->id("id_petugas_desa");
            $table->string("nama_petugas");
            $table->string("jabatan");
            $table->string("email");
            $table->string("no_telpon");
            $table->string("alamat");
            $table->string("password");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas_desa');
    }
};
