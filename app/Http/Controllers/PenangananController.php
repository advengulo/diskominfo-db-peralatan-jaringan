<?php

namespace App\Http\Controllers;

use App\Models\Gangguan;
use Illuminate\Http\Request;

class PenangananController extends Controller
{
    public function index()
    {
        $penanganans = Gangguan::all();

        return view('pages.penanganan.index', compact('$penanganans'));
    }
}
