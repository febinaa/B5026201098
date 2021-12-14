<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HarddiskController extends Controller
{
    public function index()
    {
    	// mengambil data dari table harddisk
    	$harddisk = DB::table('harddisk')->paginate(3) ;

        // $harddisk = DB::table('harddisk')
        // ->join('pegawai', 'harddisk.IDPegawai', '=', 'pegawai.pegawai_id')
        // ->select('harddisk.*', 'pegawai.pegawai_nama')
        // ->paginate(3);



    	// mengirim data pegawai ke view index
    	return view('harddisk.index',['harddisk' => $harddisk] );

    }

    public function tambah()
    {
        $harddisk = DB::table('harddisk')->orderBy('merkharddisk', 'asc')->get();


        // memanggil view tambah
        return view('harddisk.tambah',['harddisk' => $harddisk] );

    }


    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // DB::insert()->insert();
        // insert data ke table pegawai
        DB::table('harddisk')->insert([
            'merkharddisk' => $request->merkharddisk,
            'stockharddisk' => $request->stockharddisk,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/harddisk');

    }

        public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $harddisk = DB::table('harddisk')->where('kodeharddisk',$id)->get();

        // $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        // $judul = "Haloo Apa Kabar" ;

        // passing data pegawai yang didapat ke view edit.blade.php
        return view('harddisk.edit',['harddisk' => $harddisk] );
    }
    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('harddisk')->where('kodeharddisk',$request->id)->update([
            'merkharddisk' => $request->merkharddisk,
            'stockharddisk' => $request->stockharddisk,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/harddisk');
    }

        public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('harddisk')->where('kodeharddisk',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/harddisk');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table pegawai sesuai pencarian data
		$harddisk = DB::table('harddisk')
		->where('merkharddisk','like',"%".$cari."%")
        ->orWhere('stockharddisk','like',"%".$cari."%")
		->paginate();



    	// mengirim data absen ke view index
		return view('harddisk.index',['harddisk' => $harddisk]);

	}

    public function view($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$harddisk = DB::table('harddisk')->where('kodeharddisk',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('harddisk.detail',['harddisk' => $harddisk]);

	}


}
