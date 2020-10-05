<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Kelas;
use App\Model\Mapel;
use App\User;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function getMyMapel($id)
    {
        $kelas = User::select('id_kelas')->where('id', $id)->first();
        $mapel = Mapel::with('guru')->where('id_kelas', $kelas->id_kelas)->get();
        return $mapel;
    }
}
