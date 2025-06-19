<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    // Tampilkan seluruh data karyawan
    public function tablekaryawan()
    {
    $karyawan = DB::table('karyawan')->paginate(10);
    return view('karyawan/tablekaryawan', ['karyawan' => $karyawan]);
    }

    // Tampilkan form tambah karyawan
    public function tambah()
    {
        return view('karyawan/tambahkaryawan');
    }

    // Simpan data karyawan baru
    public function simpan(Request $request)
    {
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect('/karyawan');
    }

    // Hapus data berdasarkan kodepegawai
    public function hapus($id)
    {
        DB::table('karyawan')->where('kodepegawai', $id)->delete();
        return redirect('/karyawan');
    }
}
