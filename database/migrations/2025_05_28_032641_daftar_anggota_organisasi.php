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
        Schema::create('daftar_anggota', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anggota_id'); // Tambahkan kolom ini
            $table->foreign('anggota_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->string('nama');
            $table->string('nim');
            $table->string('jurusan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_anggota');
    }
};
