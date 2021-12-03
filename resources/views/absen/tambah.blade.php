@extends('layout.ceria')

@section('title', 'TAMBAH ABSEN PEGAWAI')

@section('isikonten')


	<h3>Tambah Absen Pegawai</h3>

	<a href="/absen" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}


        <div class="mb-3">
            <label class="form-label">Pegawai</label>
            <select class="form-select" name="IDPegawai" aria-label="Default select example">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select><br>
            </div>

            <div class="mb-3">
                <label for="datetimepicker1" class="form-label">Tanggal</label>
                <div class="form-group">
                    <div class="input-group date" id="datetimepicker">
                      <input type="text" class="form-control" name="Tanggal" required/>
                      <div class="input-group-addon input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                      </div>
                    </div>
                  </div>
           </div>

           <div class="mb-3">
            <label class="form-label">Status</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="hadir" name="Status" value="H" required>
                <label class="form-check-label" for="hadir">
                  HADIR
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input"  type="radio" id="tidak" name="Status" value="T" checked="checked" required>
                <label class="form-check-label" for="tidak">
                  TIDAK HADIR
                </label>
              </div>
            </div>


		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

    @endsection
