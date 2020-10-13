<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Kelas;
use App\Model\Mapel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MapelController extends Controller
{
    public function getMyMapel()
    {
        $kelas = User::select('id_kelas')->where('id', Auth::user()->id)->first();
        $mapel = Mapel::with('guru')->where('id_kelas', $kelas->id_kelas)->get();
        return $mapel;
    }

    public function detailMyMapel($id)
    {
        $mapelDetail = Mapel::with('tugas', 'absen', 'guru')->findOrFail($id);
        return $mapelDetail;
    }
}
