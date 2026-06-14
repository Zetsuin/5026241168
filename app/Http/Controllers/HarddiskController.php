<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class HarddiskController extends Controller
{
    public function index()
    {
        $harddisk = DB::table('harddisk')->orderBy('kodeharddisk')->get();
        return view('harddisk.index', compact('harddisk'));
    }

    public function create()
    {
        return view('harddisk.create');
    }

    public function store(Request $request)
    {
        DB::table('harddisk')->insert([
            'merkharddisk' => $request->merkharddisk,
            'stockharddisk' => $request->stockharddisk,
            'tersedia' => $request->tersedia,
        ]);

        return redirect('/harddisk');
    }
}
