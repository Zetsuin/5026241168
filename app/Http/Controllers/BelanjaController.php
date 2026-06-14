<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class belanjaController extends Controller
{
    public function index()
    {
        $belanja = DB::table('keranjangbelanja')->orderBy('ID')->get();
        return view('belanja.index', compact('belanja'));
    }

    public function tambah()
    {
        return view('belanja.tambah');
    }

    public function store(Request $request)
    {

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect('/belanja')->with('success', 'Data belanja berhasil ditambahkan.');
    }

    public function hapus($ID)
    {
        DB::table('keranjangbelanja')->where('ID', $ID)->delete();

        return redirect()->route('belanja.index')->with('success', 'Data belanja berhasil dihapus.');
    }
}
