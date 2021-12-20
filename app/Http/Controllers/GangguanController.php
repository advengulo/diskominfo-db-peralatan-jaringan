<?php

namespace App\Http\Controllers;

use App\Models\Gangguan;
use App\Models\Peralatan;
use Illuminate\Http\Request;

class GangguanController extends Controller
{
    public function index()
    {
        $peralatans = Peralatan::all();
        
        return view('pages.gangguan.index', compact('peralatans'));
    }

    public function store(Request $request)
    {
        Gangguan::create($request->all());

        return redirect()->back()->with('success', 'Pengajuan Berhasil ditambahkan');
    }
}
