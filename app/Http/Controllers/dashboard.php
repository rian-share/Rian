<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;
use App\Models\anggota;
use App\Models\kartu;
use App\Models\peminjaman;
use GuzzleHttp\Psr7\Query;

class dashboard extends Controller
{
    public function lihatbuku(){
        $query = buku::all();
        return view('buku',compact('query'));
    }
    public function lihatanggota(){
        $query = anggota::all();
        return view('anggota',compact('query'));
    }
    public function lihatkartu(){
        $query = kartu::all();
        return view('kartu',compact('query'));
    }
    public function lihatpeminjaman(){
        $query = peminjaman::all();
        return view('peminjaman',compact('query'));
    }
    public function tambahbuku(){
        return view('tambahbuku');
    }
    public function hapusbuku($hapus){
         buku::destroy($hapus);
       return redirect('/buku');
    }
    public function simpanbuku(Request $request){
        // dd($request);
        buku::create([
            'judul'=>$request->judul,
            'pengarang'=>$request->pengarang,
            'tahun_terbit'=>$request->tahun
        ]);
   return redirect('/buku');
    }
}
