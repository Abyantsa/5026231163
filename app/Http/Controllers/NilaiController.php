<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function indexnilai()
    {
        $nilai = DB::table('nilai')->get();
        return view('eas/indexnilai', ['nilai' => $nilai]);
    }

    public function tambah()
    {
        return view('eas/tambahnilai');
    }

    public function store(Request $request)
    {
        DB::table('nilai')->insert([
            'nomorinduksiswa' => $request->nomorinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks
        ]);

        return redirect('/eas');
    }

}
