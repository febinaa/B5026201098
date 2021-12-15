@extends('layout.ceria')

@section('title', 'NILAI KULIAH')

@section('isikonten')

@section('judulhalaman', 'NILAI KULIAH')


    {{-- <h3>Data Pegawai</h3> --}}

	<a href="/nilaikuliah/tambah" type="button" class="btn btn-warning"> + Tambah Nilai Kuliah</a>

	<br/>
	{{-- <br/>

    <div class="container">
        <div>
	    <form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input class="btn-success" type="submit" value="CARI" >
	    </form>
        </div>
    </div> --}}

    <br>


	<table class="table table-striped">
		<tr>
            <th>ID</th>
			<th>NRP</th>
			{{-- <th>Jabatan</th>
			<th>Umur</th> --}}
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
           @php
               $predikat = '';
           @endphp
            <td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
            <td>{{ $n->SKS }}</td>
            <td>
                @php
                    if($n->NilaiAngka <= 40){
                        $predikat = 'D';
                    }
                @endphp
                {{$predikat}}
            </td>
            <td>{{ $n->NilaiAngka * $n->SKS }}</td>
		</tr>

			{{-- <td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class= "btn btn-default btn-sm" role="button">View Detail</a>

				<a href="/pegawai/edit/{{ $p->pegawai_id }}" type="button" class="btn btn-primary">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" type="button" class="btn btn-danger">Hapus</a>
			</td> --}}
		@endforeach
	</table>

    {{ $nilaikuliah->links()  }}

    @endsection
