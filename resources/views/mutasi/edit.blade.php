<!DOCTYPE html>
<html>
<head>
    <title>Tabel Mutasi</title>
</head>
<body>

	<h3>Edit Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $m->ID }}"> <br/>
		ID Pegawai <input type="number" name="IDPegawai" required="required" value="{{ $m->IDPegawai }}"> <br/>
		Departemen <input type="text" name="Departemen" required="required" value="{{ $m->Departemen }}"> <br/>
		Sub Departemen <input type="text" name="SubDepartemen" value="{{ $m->SubDepartemen }}"> <br/>
		Mulai Bertugas <input type="datetime" name="MulaiBertugas" required="required" value="{{ $m->MulaiBertugas }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
