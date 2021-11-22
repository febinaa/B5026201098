<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MutasiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table mutasi
    	$mutasi = DB::table('mutasi')->get();

    	// mengirim data pegawai ke view index
    	return view('mutasi.index',['mutasi' => $mutasi]);

    }


        // method untuk menampilkan view form tambah mutasi
    public function tambah()
    {

        // memanggil view tambah
        return view('mutasi.tambah');

    }


        // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('mutasi')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Departemen' => $request->Departemen,
            'SubDepartemen' => $request->SubDepartemen,
            'MulaiBertugas' => $request->MulaiBertugas
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/mutasi');

    }


        // method untuk edit data pegawai
    public function edit($ID)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $mutasi = DB::table('mutasi')->where('ID',$ID)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('mutasi.edit',['mutasi' => $mutasi]);

    }


        // update data mutasi
    public function update(Request $request)
    {
        // update data mutasi
        DB::table('mutasi')->where('ID',$request->ID)->update([
            'IDPegawai' => $request->IDPegawai,
            'Departemen' => $request->Departemen,
            'SubDepartemen' => $request->SubDepartemen,
            'MulaiBertugas' => $request->MulaiBertugas
        ]);
        // alihkan halaman ke halaman mutasi
        return redirect('/mutasi');
    }

        // method untuk hapus data mutasi
    public function hapus($ID)
    {
        // menghapus data mutasi berdasarkan id yang dipilih
        DB::table('mutasi')->where('ID',$ID)->delete();

        // alihkan halaman ke halaman mutasi
        return redirect('/mutasi');
    }
}
