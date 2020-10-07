<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\KumpulTugas;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class KumpulTugasController extends Controller
{
    public function store(Request $request, $tugas, $user)
    {

        $this->validate($request, [
            'file' => 'required'
        ]);
        $file = $request->file;
        $fileName = time() . $file->getClientOriginalName();
        $file->move('asset_backend/file/upload/tugas', $fileName);

        $kumpulTugas = [
            'id' => Uuid::generate(4),
            'id_tugas' => $tugas,
            'id_user' => $user,
            'file' => 'asset_backend/file/upload/tugas/' . $fileName,
            'tanggal_kumpul' => now(),
            'nilai' => 0
        ];

        $data =  KumpulTugas::create($kumpulTugas);

        if ($data) {
            return response()->json([
                'success' => true
            ], 200);
        } else {
            return response()->json([
                'success' => false
            ], 401);
        }
    }
}
