@extends('template')

@section('content')
    <h3>Tambah Harddisk</h3>

    <a href="/harddisk" class="btn btn-info">Kembali</a>
    <br/><br/>

    <form action="/harddisk/store" method="post">
        {{ csrf_field() }}

        <div class="row mb-3">
            <div class="col-3">
                <label>Merk</label>
            </div>
            <div class="col-8">
                <input type="text" name="merk" required="required" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3">
                <label>Harga</label>
            </div>
            <div class="col-8">
                <input type="number" name="harga" required="required" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3">
                <label>Berat (kg)</label>
            </div>
            <div class="col-8">
                <input type="number" step="0.01" name="berat" required="required" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3">
                <label>Tersedia</label>
            </div>
            <div class="col-8">
                <input type="checkbox" name="tersedia" value="1"> Ya
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
