<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BelajarKlikController extends Controller
{
    public function indexklik()
    {
        $log = DB::table('absenklik')->orderBy('id', 'desc')->get();
        return view('belajarlogklik', ['log' => $log]);
    }

    public function store(Request $request)
    {
        $now = Carbon::now();

        DB::table('absenklik')->insert([
            'tanggal' => $now->toDateString(),
            'jam' => $now->toTimeString(),
            'jumlahklik' => 1
        ]);

        return redirect('/absenklik')->with([
            'success' => 'Berhasil absen!',
            'tanggal' => $now->toDateString(),
            'jam' => $now->toTimeString()
        ]);
    }
}
