<!DOCTYPE html>
<html>
<head>
	<title>Tabel Mutasi</title>
</head>
<body>

	<h3>Data Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Departemen <input type="text" name="Departemen" required="required"> <br/>
		Sub Departemen <input type="text" name="SubDepartemen" required="required"> <br/>
		Mulai Bertugas <input type="datetime" name="MulaiBertugas" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
