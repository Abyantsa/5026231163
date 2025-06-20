@extends('template')

@section('content')
    <h3>Tambah Data Nilai Mahasiswa</h3>

    <a href="/eas" class="btn btn-info">Kembali</a>

    <br/>
    <br/>

    <form action="/eas/storenilai" method="post">
        {{ csrf_field() }}
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-6">
                <input type="text" name="nomorinduksiswa" class="form-control" placeholder="Masukkan Nomor Induk Siswa" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Nilai</label>
            <div class="col-sm-6">
                <input type="text" name="nilaiangka" class="form-control" placeholder="Masukkan Nilai" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-6">
                <input type="text" name="sks" class="form-control" placeholder="Masukkan SKS" required>
            </div>
        </div>

        <br/>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
