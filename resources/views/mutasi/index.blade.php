@extends('layout.ceria')

@section('title', 'MUTASI PEGAWAI')

@section('isikonten')

    <h3>Data Mutasi Pegawai</h3>

	<a href="/mutasi/tambah" type="button" class="btn btn-warning"> + Tambah Mutasi Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-striped">
		<tr>
            <th>ID</th>
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
			<th>Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
            <td>{{ $m->ID }}</td>
			<td>{{ $m->IDPegawai }}</td>
			<td>{{ $m->Departemen }}</td>
			<td>{{ $m->SubDepartemen }}</td>
			<td>{{ $m->MulaiBertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $m->ID }}" type="button" class="btn btn-primary">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->ID }}" type="button" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    @endsection
