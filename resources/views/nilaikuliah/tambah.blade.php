@extends('layout.ceria')

@section('title', 'NILAI KULIAH')

@section('isikonten')

@section('judulhalaman', 'TAMBAH NILAI KULIAH')


    {{-- <h3>Tambah Pegawai</h3> --}}

	<a href="/nilaikuliah" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post">
		{{ csrf_field() }}
		NRP <input type="number" name="NRP" required="required" class="form-control"> <br/>
		Nilai Angka <input type="text" name="NilaiAngka" required="required" class="form-control"> <br/>
		SKS <input type="number" name="SKS" required="required" class="form-control"> <br/>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

    @endsection
