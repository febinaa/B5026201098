@extends('layout.ceria')

@section('title', 'DATA PEGAWAI')

@section('isikonten')


    <h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" type="button" class="btn btn-warning"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" type="button" class="btn btn-primary">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" type="button" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


    @endsection
