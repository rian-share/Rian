<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class perpustakaan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           // Insert anggota
           DB::table('D02233_anggota')->insert([
            [
                'nisn' => '2025012345',
                'nama' => 'Budi Santoso',
                'alamat' => 'Jl. Mawar No. 1',
                'no_telepon' => '081234567890',
            ],
            
        ]);

        // Insert kartu_anggota
        DB::table('D02233_kartu_anggota')->insert([
            [
                'nisn' => '2025012345',
                'tanggal_terbit' => now(),
                'tanggal_kedaluwarsa' => now()->addYear(),
            ],
            
        ]);

        // Insert buku
        $buku1 = DB::table('D02233_buku')->insert([
           ['id' => '1',
            'judul' => 'Belajar Laravel 9',
            'pengarang' => 'Agus Prasetyo',
            'tahun_terbit' => 2021],

            [
                'id' => '2',
                'judul' => 'Belajar Laravel 10',
            'pengarang' => 'Agus Prasetyo',
            'tahun_terbit' => 2021],

            [
                'id' => '3',
                'judul' => 'Belajar',
            'pengarang' => 'rian Prasetyo',
            'tahun_terbit' => 2025],

            [
                'id' => '4',
                'judul' => 'Belajar memasak',
            'pengarang' => 'rian',
            'tahun_terbit' => 2020]

        ]);

       
        // Insert peminjaman
        DB::table('D02233_peminjaman')->insert([
            [
                'nisn' => '2025012345',
                'buku_id' => '1',
                'tanggal_pinjam' => now(),
                'tanggal_kembali' => null,
            ],
            
        ]);
    }
}
