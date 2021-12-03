@extends('layout.ceria')

@section('title', 'EDIT DATA PEGAWAI')

@section('isikonten')

	<h3>Edit Pegawai</h3>

	<a href="/pegawai" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}" > <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control"> <br/>
		Alamat <textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea> <br/>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach


    @endsection
