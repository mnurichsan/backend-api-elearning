<?php

namespace App\Http\Controllers;

use App\Model\Kelas;
use App\Model\Mapel;
use App\Model\Tugas;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use Alert;

class TugasController extends Controller
{
    public function index($kelas, $mapel)
    {

        $mapel_id = Mapel::select('id')->where('slug', $mapel)->first();
        $kelass = Kelas::where('slug', $kelas)->first();
        $tugass = Tugas::where('id_mapel', $mapel_id->id)->get();
        $mapels = Mapel::where('slug', $mapel)->first();
        return view('tugas.index', compact('tugass', 'kelass', 'mapels'));
    }

    public function create($kelas, $mapel)
    {
        $kelass = Kelas::where('slug', $kelas)->first();
        $mapels = Mapel::where('slug', $mapel)->first();
        return view('tugas.create', compact('kelass', 'mapels'));
    }

    public function store(Request $request, $kelas, $mapel)
    {
        //
        $mapel_id = Mapel::select('id')->where('slug', $mapel)->first();
        $this->validate($request, [
            'name' => 'required',
            'start_at' => 'required',
            'end_at' => 'required'
        ]);

        $tugas = [
            'id' => Uuid::generate(4),
            'name' => $request->name,
            'id_mapel' => $mapel_id->id,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at
        ];

        Tugas::create($tugas);
        toast('Data berhasil di input', 'success');
        return redirect()->route('tugas.index', [$kelas, $mapel]);
    }

    public function edit($kelas, $mapel, $id)
    {
        $kelass = Kelas::where('slug', $kelas)->first();
        $mapels = Mapel::where('slug', $mapel)->first();
        $tugas = Tugas::findorFail($id);
        return view('tugas.edit', compact('kelass', 'mapels', 'tugas'));
    }

    public function update(Request $request, $kelas, $mapel, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'start_at' => 'required',
            'end_at' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at
        ];
        Tugas::findOrFail($id)->update($data);
        toast('Data berhasil di update', 'success');
        return redirect()->route('tugas.index', [$kelas, $mapel]);
    }


    public function destroy($kelas, $mapel, $id)
    {

        Tugas::findOrFail($id)->delete();
        toast('Data berhasil di hapus', 'success');
        return redirect()->route('tugas.index', [$kelas, $mapel]);
    }
}
