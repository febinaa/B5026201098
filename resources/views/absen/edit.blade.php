@extends('layout.ceria')

@section('title', 'EDIT ABSEN PEGAWAI')

@section('isikonten')


    <h3> Edit Absen Pegawai</h3>

    <a href="/absen " class="btn btn-secondary">Kembali</a>

	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        <div class="mb-3">
            <label class="form-label">Pegawai</label>
            <select class="form-select" name="IDPegawai" aria-label="Default select example">
                @foreach($pegawai as $peg)
                <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                @endforeach
            </select>
            </div>

        <div class="mb-3">
            <label for="datetimepicker1" class="form-label">Tanggal</label>
            <div class="form-group">
                <div class="input-group date" id="datetimepicker">
                  <input type="text" class="form-control" name="Tanggal" value="{{ $p->Tanggal}}" required/>
                  <div class="input-group-addon input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="hadir" name="Status" value="H" value="{{ $p->Status}}" required>
                    <label class="form-check-label" for="hadir">
                      HADIR
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input"  type="radio" id="tidak" name="Status" value="T" checked="checked" required>
                    <label class="form-check-label" for="tidak">
                      TIDAK
                    </label>
                  </div>
                </div>
    <input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
    @endforeach


    @endsection

