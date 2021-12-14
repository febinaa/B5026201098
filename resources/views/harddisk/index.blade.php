@extends('layout.ceria')

@section('title', 'HARDDISK')

@section('isikonten')

@section('judulhalaman', 'DATA HARDDISK')


    {{-- <h3>Data Mutasi Pegawai</h3> --}}

	<a href="/harddisk/tambah" type="button" class="btn btn-warning"> + Tambah Harddisk Baru</a>

	<br/>
	<br/>

    <div class="container">
        <div>
	    <form action="/harddisk/cari" method="GET" >
		<input type="text" name="cari" placeholder="Cari harddisk .." value="{{ old('cari') }}">
		<input class="btn-success" type="submit" value="CARI" >
	    </form>
        </div>
    </div>
    <br>

	<table class="table table-striped">
		<tr>
            <th>No</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Ketersediaan</th>
            <th>Opsi</th>
		</tr>
		@foreach($harddisk as $h)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $h->merkharddisk }}</td>
			<td>{{ $h->stockharddisk }}</td>
			<td>{{ $h->tersedia }}</td>
			<td>
                <a href="/harddisk/detail/{{ $h->kodeharddisk }}" class= "btn btn-default btn-sm" role="button">View Detail</a>

				<a href="/harddisk/edit/{{ $h->kodeharddisk }}" type="button" class="btn btn-primary">Edit</a>
				|
				<a href="/harddisk/hapus/{{ $h->kodeharddisk }}" type="button" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $harddisk->links()  }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    @endsection
