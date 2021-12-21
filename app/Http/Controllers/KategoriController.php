<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Peralatan;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = Kategori::all();

        $peralatan = Peralatan::all();

        $total = [];

        foreach($kategoris as $kategori){
            $total[$kategori->id] = $peralatan->where('kategori_id', $kategori->id)->count();
        }

        return view('pages.kategori.index', compact('kategoris', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kategori::create($request->all());

        return redirect()->route('kategoris.index')->with('success','Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::where('id', $id)->first();

        return view('pages.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori = Kategori::where('id', $id)->first();
        $kategori->update($request->all());

        return redirect()->route('kategoris.index')->with('success','Kategori berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peralatans = Peralatan::where('kategori_id', $id)->first();
        if($peralatans){
            return redirect()->back()->with('error', 'Kategori terikat dengan barang');
        }
        else{
            Kategori::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'Kategori berhasil dihapus');
        }
    }
}
