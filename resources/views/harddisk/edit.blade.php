@extends('layout.ceria')

@section('title', 'EDIT HARDDISK')

@section('isikonten')

@section('judulhalaman', 'EDIT HARDDISK')

	{{-- <h3>Edit Pegawai</h3> --}}

	<a href="/harddisk" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($harddisk as $h)
	<form action="/harddisk/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $h->kodeharddisk }}" > <br/>
		Merk <input type="text" required="required" name="merkharddisk" value="{{ $h->merkharddisk }}" class="form-control"> <br/>
		Stock <input type="number" required="required" name="stockharddisk" value="{{ $h->stockharddisk }}" class="form-control"> <br/>
        <div class="mb-3">
            <label class="form-label">Ketersediaan</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="tersedia" name="tersedia" value="T" value="{{ $h->tersedia}}" required>
                <label class="form-check-label" for="tersedia">
                    TERSEDIA
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input"  type="radio" id="kosong" name="tersedia" value="K" checked="checked" required>
                <label class="form-check-label" for="kosong">
                    KOSONG
                </label>
              </div>
            </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach


    @endsection
