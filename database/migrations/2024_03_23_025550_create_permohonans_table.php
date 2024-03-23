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
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id("id_permohonan");
            $table->unsignedBigInteger("id_penduduk");
            $table->date("tgl_permohonan");
            $table->enum("status_permohonan", ['diterima', 'diproses', 'selesai']);
            $table->string("keterangan");

            $table->foreign('id_penduduk')->references('id_penduduk')->on('penduduk')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonan');
    }
};
