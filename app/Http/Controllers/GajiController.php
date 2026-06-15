<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class GajiController extends Controller
{
    public function index()
    {
        $gaji = DB::table('penggajian')->orderBy('NIP')->get();
        return view('eas.index', compact('gaji'));
    }

    public function create()
    {
        return view('eas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NIP' => 'required|string|max:8|unique:penggajian,NIP',
            'potongan' => 'required|numeric',

        ]);

        DB::table('penggajian')->insert([
            'NIP' => $request->NIP,
            'gajipokok' => $request->gajipokok,
            'potongan' => $request->potongan,
        ]);

        return redirect('/eas');
    }

    public function destroy($NIP)
    {
        DB::table('penggajian')->where('NIP', $NIP)->delete();

        return redirect('/eas');
    }
}
