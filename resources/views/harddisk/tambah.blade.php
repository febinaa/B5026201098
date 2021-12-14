@extends('layout.ceria')

@section('title', 'TAMBAH HARDDISK')

@section('isikonten')

@section('judulhalaman', 'TAMBAH HARDDISK')

	<a href="/harddisk" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/harddisk/store" method="post">
		{{ csrf_field() }}
		Merk <input type="text" name="merkharddisk" required="required" class="form-control"> <br/>
		Stock <input type="number" name="stockharddisk" required="required" class="form-control"> <br/>
        <div class="mb-3">
            <label class="form-label">Ketersediaan</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="tersedia" name="tersedia" value="T" required>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    @endsection
