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
        Schema::create('keluargas', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_user');
            $table->string('no_kk');
            $table->string('nik_kepala_keluarga');
            $table->string('hubungan_dengan_kepala_keluarga');
            $table->string('jumlah_orang_dalam_keluarga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluargas');
    }
};
