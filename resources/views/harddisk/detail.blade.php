@extends('layout.ceria')

@section('title', 'EDIT HARDDISK')

@section('isikonten')

@section('judulhalaman', 'EDIT HARDDISK')

	{{-- <h3>Edit Pegawai</h3> --}}

	<a href="/harddisk" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($harddisk as $h)
	<form action="/harddisk" method="post">
		<input type="hidden" name="id" value="{{ $h->kodeharddisk }}" > <br/>
		Merk <input type="text" required="required" name="merkharddisk" value="{{ $h->merkharddisk }}" class="form-control" readonly> <br/>
		Stock <input type="number" required="required" name="stockharddisk" value="{{ $h->stockharddisk }}" class="form-control" readonly> <br/>
        Tersedia <input type="text" required="required" name="tersedia" value="{{ $h->tersedia }}" class="form-control" readonly> <br/>

	</form>
	@endforeach


    @endsection
