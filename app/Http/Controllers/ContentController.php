<?php

namespace App\Http\Controllers;

use App\Model\Jurusan;
use App\Model\Kelas;
use App\Model\Mapel;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class ContentController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('content', compact('jurusans'));
    }

    public function contentKelas($id)
    {
        $kelass = Kelas::with('jurusan')->where('id_jurusan', $id)->get();
        $jurusanName = Jurusan::findOrFail($id);


        return view('contentkelas', compact('kelass', 'jurusanName'));
    }

    public function detailKelas($slug, $id)
    {
        $kelas = Kelas::where('slug', $slug)->firstOrFail();
        $siswas = User::where('id_kelas', $id)->get();
        $mapels = Mapel::with('kelas')->where('id_kelas', $id)->get();
        //dd($mapels);
        // return $mapels;
        return view('mapel.index', compact('kelas', 'siswas', 'mapels'));
    }

    public function createMapel($slug)
    {
        $kelas = Kelas::with('mapel')->where('slug', $slug)->first();

        $gurus = User::where('roles', 'Guru')->get();
        return view('mapel.create', compact('gurus', 'kelas'));
    }

    public function storeMapel(Request $request, $slug)
    {
        $kelas = Kelas::where('slug', $slug)->first();
        $this->validate($request, [
            'name' => 'required',
            'guru' => 'required',
            'description' => 'required',
        ]);

        $mapel = [
            'id' => Uuid::generate(4),
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'id_kelas' => $kelas->id,
            'id_user' => $request->guru,
            'description' => $request->description
        ];

        Mapel::create($mapel);
        toast('Data berhasil di tambah', 'success');
        return redirect()->route('detail.kelas', [$kelas->slug, $kelas->id]);
    }

    public function showMapel($slug, $id)
    {
        $kelas = Kelas::where('slug', $slug)->first();
        $mapel = Mapel::with('guru')->findOrFail($id);
        return view('mapel.show', compact('kelas', 'mapel'));
    }

    public function editMapel($id)
    {
        //
    }

    public function updateMapel(Request $request)
    {
        //
    }

    public function deleteMapel($slug, $id)
    {
        $kelas = Kelas::with('mapel')->where('slug', $slug)->first();
        Mapel::findOrFail($id)->delete();
        toast('data berhasil di hapus', 'success');
        return redirect()->route('detail.kelas', [$kelas->slug, $kelas->id]);
    }
}
