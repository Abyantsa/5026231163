@extends('template')

@section('content')
<div class="container mt-4">
    <h3>Tambah Data Karyawan</h3>

    <form action="/karyawan/simpan" method="POST">
        {{ csrf_field() }}

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class="col-sm-6">
                <input type="text" name="kodepegawai" class="form-control" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" name="namalengkap" class="form-control" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-6">
                <input type="text" name="divisi" class="form-control" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-6">
                <input type="text" name="departemen" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 offset-sm-2">
                <input type="submit" value="Simpan" class="btn btn-success">
                <a href="/karyawan" class="btn btn-info">Kembali</a>
            </div>
        </div>
    </form>
</div>
@endsection
