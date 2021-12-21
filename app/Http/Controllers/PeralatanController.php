<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Peralatan;
use Illuminate\Http\Request;

class PeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peralatans = Peralatan::all();

        return view('pages.peralatan.index', compact('peralatans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();

        return view('pages.peralatan.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Peralatan::create($request->all());

        return redirect()->route('peralatans.index')->with('success','Peralatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peralatan = Peralatan::where('id', $id)->first();

        return view('pages.peralatan.show', compact('peralatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peralatan = Peralatan::where('id', $id)->first();
        $kategoris = Kategori::all();

        return view('pages.peralatan.edit', compact('peralatan', 'kategoris'));
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
        $peralatan = Peralatan::where('id', $id)->first();
        $peralatan->update($request->all());

        return redirect()->route('peralatans.index')->with('success','Peralatan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peralatan::findOrFail($id)->delete();

        return redirect()->route('peralatans.index')->with('deleted','Peralatan berhasil dihapus');
    }
}
