<?php

namespace App\Http\Controllers;

use App\Model\Kelas;
use App\Model\KumpulTugas;
use App\Model\Mapel;
use App\Model\Tugas;
use Illuminate\Http\Request;

class KumpulTugasController extends Controller
{
    public function index($kelas, $mapel, $id)
    {
        $kelass = Kelas::where('slug', $kelas)->first();
        $mapels = Mapel::where('slug', $mapel)->first();
        $tugasid = Tugas::where('id', $id)->first();
        $tugass = KumpulTugas::where('id_tugas', $id)->get();
        return view('tugas.kumpul', compact('kelass', 'mapels', 'tugass', 'tugasid'));
    }

    public function destroy($kelas, $mapel, $id)
    {
        $kumpul_tugas = KumpulTugas::findOrFail($id);
        $file = $kumpul_tugas->select('file')->first();
        $file_path = $file->file;
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        $kumpul_tugas->delete();
        toast('Data Berhasil di hapus', 'success');
        return redirect()->back();
    }
}
