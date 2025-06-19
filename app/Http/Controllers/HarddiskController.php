<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HarddiskController extends Controller
{
    // Menampilkan data harddisk
    public function tableharddisk()
    {
        $harddisk = DB::table('harddisk')->paginate(10);
        return view('harddisk/tableharddisk', ['harddisk' => $harddisk]);
    }

    // Menampilkan form tambah harddisk
    public function tambah()
    {
        return view('harddisk/tambahharddisk');
    }

    // Simpan data harddisk ke database
    public function store(Request $request)
    {
        DB::table('harddisk')->insert([
            'merkharddisk' => $request->merk,
            'hargaharddisk' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/harddisk');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $harddisk = DB::table('harddisk')->where('ID', $id)->get();
        return view('harddisk/editharddisk', ['harddisk' => $harddisk]);
    }

    // Proses update data harddisk
    public function update(Request $request)
    {
        DB::table('harddisk')->where('ID', $request->id)->update([
            'merkharddisk' => $request->merk,
            'hargaharddisk' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/harddisk');
    }

    // Menghapus data harddisk
    public function hapus($id)
    {
        DB::table('harddisk')->where('ID', $id)->delete();
        return redirect('/harddisk');
    }

    // Mencari data harddisk berdasarkan merk
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $harddisk = DB::table('harddisk')
            ->where('merkharddisk', 'like', "%" . $cari . "%")
            ->paginate();

        return view('harddisk/tableharddisk', ['harddisk' => $harddisk, 'cari' => $cari]);
    }
}
