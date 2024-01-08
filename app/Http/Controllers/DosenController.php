<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function show($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.show', compact('dosen'));
    }

    // Tambahkan metode lain sesuai kebutuhan
}
