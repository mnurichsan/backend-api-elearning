<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Kelas;

class KelasController extends Controller
{
    public function getKelas()
    {
        $kelas = Kelas::with('jurusan')->get();

        return response()->json($kelas, 200);
    }
}
