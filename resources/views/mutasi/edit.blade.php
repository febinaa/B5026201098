@extends('layout.ceria')

@section('title', 'EDIT MUTASI PEGAWAI')

@section('isikonten')

	<h3>Edit Mutasi Pegawai</h3>

	<a href="/mutasi" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $m->ID }}"> <br/>

        <div class="mb-3">
            <label class="form-label">Pegawai</label>
            <select class="form-select" name="IDPegawai" aria-label="Default select example">
                @foreach($pegawai as $peg)
                <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $m->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                @endforeach
            </select>
            </div>


		{{-- ID Pegawai <input type="number" name="IDPegawai" required="required" value="{{ $m->IDPegawai }}"> <br/> --}}
		Departemen <input type="text" name="Departemen" required="required" value="{{ $m->Departemen }}" class="form-control"> <br/>
		Sub Departemen <input type="text" name="SubDepartemen" value="{{ $m->SubDepartemen }}" class="form-control"> <br/>

        <div class="mb-3">
            <label for="datetimepicker1" class="form-label">Mulai Bertugas</label>
            <div class="form-group">
                <div class="input-group date" id="datetimepicker">
                  <input type="text" class="form-control" name="MulaiBertugas" value="{{ $m->MulaiBertugas }}" required/>
                  <div class="input-group-addon input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                  </div>
                </div>
              </div>
            </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    @endsection
