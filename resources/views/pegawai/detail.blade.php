@extends('layout.ceria')

@section('title', 'EDIT DATA PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'DETAIL PEGAWAI')
<br>


	{{-- <h3>Detail Pegawai</h3> --}}

	<a href="/pegawai" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control" readonly> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control" readonly> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control" readonly> <br/>
		Alamat <textarea required="required" name="alamat" class="form-control" readonly>{{ $p->pegawai_alamat }}</textarea> <br/>

	@endforeach


    @endsection
