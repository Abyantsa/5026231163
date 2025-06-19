@extends('template')

@section('content')
	<h3>Data Harddisk</h3>

	<a href="/harddisk/tambah" class="btn btn-primary"> + Tambah Harddisk Baru</a>

	<p>Cari Data Harddisk :</p>
	<form action="/harddisk/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Harddisk ..">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

	<br/>
	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>Merk</th>
			<th>Harga</th>
			<th>Tersedia</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($harddisk as $h)
		<tr>
			<td>{{ $h->ID }}</td>
			<td>{{ $h->merkharddisk }}</td>
			<td>{{ number_format($h->hargaharddisk) }}</td>
			<td>{{ $h->tersedia ? 'Ya' : 'Tidak' }}</td>
			<td>{{ $h->berat }} kg</td>
			<td>
				<a href="/harddisk/edit/{{ $h->ID }}" class="btn btn-success">Edit</a>
				|
				<a href="/harddisk/hapus/{{ $h->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{ $harddisk->links() }}
@endsection
