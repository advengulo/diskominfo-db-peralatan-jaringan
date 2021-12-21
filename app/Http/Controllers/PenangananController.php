<?php

namespace App\Http\Controllers;

use App\Models\Gangguan;
use App\Models\Peralatan;
use App\Models\Penanganan;
use Illuminate\Http\Request;

class PenangananController extends Controller
{
    public function index()
    {
        $penanganans = Penanganan::all();

        return view('pages.penanganan.index', compact('penanganans'));
    }

    public function edit($id)
    {
        $penanganan = Penanganan::findOrFail($id);

        return view('pages.penanganan.edit', compact('penanganan'));
    }

    public function update(Request $request, $id)
    {
        $penanganan = Penanganan::findOrFail($id);

        $hasil = $request->hasil;
        if($hasil == 1){
            $hasil = "Normal";

            $peralatan = Peralatan::findOrFail($penanganan->gangguan->peralatan->id);
            $peralatan->status = "Baik";
            $peralatan->save();
        }
        elseif($hasil == 2){
            $hasil = "Rusak";

            $peralatan = Peralatan::findOrFail($penanganan->gangguan->peralatan->id);
            $peralatan->status = "Rusak Permanen";
            $peralatan->save();
        }

        $penanganan->update([
            'waktu_penanganan' => $request->waktu_penanganan,
            'nama' => $request->nama,
            'tindakan' => $request->tindakan,
            'hasil' => $hasil,
            'rekomendasi' => $request->rekomendasi,
        ]);

        $gangguan = Gangguan::findOrFail($penanganan->id_gangguan);
        $gangguan->status = true;
        $gangguan->save();

        return redirect()->route('penanganan.index')->with('success','Gangguan berhasil diupdate');
    }
}
