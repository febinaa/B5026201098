@extends('layout.ceria')

@section('title', 'ABSEN DATA PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'TAMBAH PEGAWAI')


    {{-- <h3>Tambah Pegawai</h3> --}}

	<a href="/pegawai" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required" class="form-control"> <br/>
		Jabatan <input type="text" name="jabatan" required="required" class="form-control"> <br/>
		Umur <input type="number" name="umur" required="required" class="form-control"> <br/>
		Alamat <textarea name="alamat" required="required" class="form-control"></textarea> <br/>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

    @endsection
