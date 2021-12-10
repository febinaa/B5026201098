@extends('layout.ceria')

@section('title', 'TAMBAH MUTASI PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'TAMBAH MUTASI')

	<a href="/mutasi" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}



        <div class="mb-3">
            <label class="form-label">Nama</label>
            <select class="form-select" name="IDPegawai" aria-label="Default select example">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select><br>
            </div>		Departemen <input type="text" name="Departemen" required="required"  class="form-control"> <br/>
		Sub Departemen <input type="text" name="SubDepartemen" required="required"  class="form-control"> <br/>

        <div class="mb-3">
            <label for="datetimepicker1" class="form-label">Mulai Bertugas</label>
            <div class="form-group">
                <div class="input-group date" id="datetimepicker">
                  <input type="text" class="form-control" name="MulaiBertugas" required/>
                  <div class="input-group-addon input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                  </div>
                </div>
              </div>
       </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    @endsection
