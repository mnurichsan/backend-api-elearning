<?php

namespace App\Http\Controllers;

use App\Model\Jurusan;
use App\Model\Kelas;
use App\User;
use Illuminate\Http\Request;

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


        return view('mapel.index', compact('kelas', 'siswas'));
    }
}
