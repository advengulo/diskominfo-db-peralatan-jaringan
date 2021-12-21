<?php

namespace App\Http\Controllers;

use App\Models\Gangguan;
use App\Models\Kategori;
use App\Models\Peralatan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total['peralatan'] = Peralatan::count();
        $total['kategori'] = Kategori::count();
        $total['gangguan'] = Gangguan::count();

        return view('pages.dashboard', compact('total'));
    }
}
