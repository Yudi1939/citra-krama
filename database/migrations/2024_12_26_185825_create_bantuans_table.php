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
        Schema::create('bantuans', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_user');
            $table->string('pkh');
            $table->string('pbh');
            $table->string('kip');
            $table->string('kis');
            $table->string('filepkh');
            $table->string('filepbh');
            $table->string('filekip');
            $table->string('filekis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bantuans');
    }
};
