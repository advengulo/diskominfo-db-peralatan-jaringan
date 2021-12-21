<?php

namespace App\Http\Controllers;

use App\Models\Gangguan;
use App\Models\Peralatan;
use App\Models\Penanganan;
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
        $gangguan = Gangguan::create($request->all());
        
        if($gangguan){
            $penanganan = new Penanganan;
            $penanganan->id_gangguan = $gangguan->id;
            $penanganan->save();

            $peralatan = Peralatan::find($gangguan->id_peralatan);
            $peralatan->status = "Rusak Sementara";
            $peralatan->save();
        }

        return redirect()->back()->with('success', 'Pengajuan Berhasil ditambahkan');
    }
}
