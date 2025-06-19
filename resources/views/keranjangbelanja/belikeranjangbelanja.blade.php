@extends('template')

@section('content')
    <h3>Tambah Data Keranjang Belanja</h3>

    <a href="/keranjangbelanja" class="btn btn-info">Kembali</a>

    <br/>
    <br/>

    <form action="/keranjangbelanja/storekeranjangbelanja" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="KodeBarang">Kode Barang</label>
            <input class="form-control" type="text" id="KodeBarang" name="KodeBarang" placeholder="Masukkan Kode Barang" required>
        </div>

        <div class="form-group">
            <label for="Jumlah">Jumlah</label>
            <input class="form-control" type="text" id="Jumlah" name="Jumlah" placeholder="Masukkan Jumlah" required>
        </div>

        <div class="form-group">
            <label for="Harga">Harga</label>
            <input class="form-control" type="text" id="Harga" name="Harga" placeholder="Masukkan Harga" required>
        </div>

        <br/>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
