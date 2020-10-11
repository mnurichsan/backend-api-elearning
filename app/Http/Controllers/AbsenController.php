<?php

namespace App\Http\Controllers;

use App\Model\Absen;
use App\Model\Kelas;
use App\Model\Mapel;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use Alert;

class AbsenController extends Controller
{
    public function index($kelas, $mapel)
    {
        $mapel_id = Mapel::select('id')->where('slug', $mapel)->first();
        $absens = Absen::where('id_mapel', $mapel_id->id)->get();
        $kelass = Kelas::where('slug', $kelas)->first();
        $mapels = Mapel::where('slug', $mapel)->first();
        return view('absen.index', compact('absens', 'kelass', 'mapels'));
    }

    public function create($kelas, $mapel)
    {
        $kelass = Kelas::where('slug', $kelas)->first();
        $mapels = Mapel::where('slug', $mapel)->first();
        return view('absen.create', compact('kelass', 'mapels'));
    }

    public function store(Request $request, $kelas, $mapel)
    {
        $mapel_id = Mapel::select('id')->where('slug', $mapel)->first();
        $this->validate($request, [
            'name' => 'required',
            'start_at' => 'required',
            'end_at' => 'required'
        ]);

        $absen = [
            'id' => Uuid::generate(4),
            'id_mapel' => $mapel_id->id,
            'name' => $request->name,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at
        ];

        Absen::create($absen);
        toast('Data berhasil di tambah', 'success');
        return redirect()->route('absen.index', [$kelas, $mapel]);
    }

    public function destroy($kelas, $mapel, $id)
    { //

    }
}
