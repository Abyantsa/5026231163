<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function indexkeranjangbelanja()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        return view('keranjangbelanja/indexkeranjangbelanja', ['keranjangbelanja' => $keranjangbelanja]);
    }

    public function beli()
    {
        return view('keranjangbelanja/belikeranjangbelanja');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);

        return redirect('/keranjangbelanja');
    }

    public function batal($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();
        return redirect('/keranjangbelanja');
    }
}
