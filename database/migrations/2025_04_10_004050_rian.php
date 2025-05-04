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
          // Tabel anggota
          Schema::create('D02233_anggota', function (Blueprint $table) {
            $table->string('nisn')->primary();
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_telepon');
        });

        // Tabel kartu_anggota (One to One dengan anggota)
        Schema::create('D02233_kartu_anggota', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->date('tanggal_terbit');
            $table->date('tanggal_kedaluwarsa');

            $table->foreign('nisn')->references('nisn')->on('D02233_anggota')->onDelete('cascade');
        });

        // Tabel buku
        Schema::create('D02233_buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('pengarang');
            $table->year('tahun_terbit');
            $table->timestamps();
        });

        // Tabel peminjaman (Many to Many sederhana: anggota ↔ buku)
        Schema::create('D02233_peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->foreignId('buku_id')->constrained('D02233_buku')->onDelete('cascade');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali')->nullable();

            $table->foreign('nisn')->references('nisn')->on('D02233_anggota')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('D02233_peminjaman');
        Schema::dropIfExists('D02233_buku');
        Schema::dropIfExists('D02233_kartu_anggota');
        Schema::dropIfExists('D02233_anggota');
    }
};
