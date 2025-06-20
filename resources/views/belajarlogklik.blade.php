@extends('template')

@section('content')
    <h3>Absensi Klik</h3>

    @if(session('success'))
        <div class="alert alert-success">
            <strong>{{ session('success') }}</strong><br>
            <small>Waktu dicatat: {{ session('tanggal') }} - {{ session('jam') }}</small>
        </div>
    @endif

    <form action="/absenklik/store" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Klik untuk Absen</button>
    </form>

    <hr>

    <h4>Riwayat Log Klik</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Jumlah Klik</th>
            </tr>
        </thead>
        <tbody>
            @foreach($log as $idx => $i)
            <tr>
                <td>{{ $idx + 1 }}</td>
                <td>{{ $i->tanggal }}</td>
                <td>{{ $i->jam }}</td>
                <td>{{ $i->jumlahklik }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
