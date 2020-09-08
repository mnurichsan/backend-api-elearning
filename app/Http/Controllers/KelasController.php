<?php

namespace App\Http\Controllers;

use App\Model\Jurusan;
use App\Model\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Alert;
use App\User;
use Webpatser\Uuid\Uuid;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelass = Kelas::with('jurusan', 'walikelas')->get();
        return view('kelas.index', compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusans = Jurusan::all();
        $gurus = User::all();
        return view('kelas.create', compact('jurusans', 'gurus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'jurusan' => 'required',
            'guru' => 'required'
        ]);

        $kelas = [
            'id' => Uuid::generate(4),
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'id_jurusan' => $request->jurusan,
            'id_user' => $request->guru,
            'image' => 'image.jpg'
        ];

        Kelas::create($kelas);
        toast('Data berhasil di tambah', 'success');
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        $jurusans = Jurusan::all();
        $gurus = User::all();
        return view('kelas.edit', compact('kelas', 'jurusans', 'gurus'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'jurusan' => 'required',
            'guru' => 'required'
        ]);

        $kelas = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'id_jurusan' => $request->jurusan,
            'id_user' => $request->guru,
            'image' => 'image.jpg'
        ];

        Kelas::findOrFail($id)->update($kelas);
        toast('Data berhasil di update', 'success');
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kelas::findOrFail($id)->delete();
        toast("Data berhasil di hapus", 'success');
        return redirect()->route('kelas.index');
    }

    public function getTrash()
    {
        $kelass = Kelas::with('jurusan', 'walikelas')->onlyTrashed()->get();

        return view('kelas.trash', compact('kelass'));
    }

    public function restore($id)
    {
        //
        Kelas::onlyTrashed()->findOrFail($id)->restore();
        toast('Data berhasil di restore', 'success');
        return redirect()->route('kelas.trash');
    }
    public function delete($id)
    {
        //
        Kelas::onlyTrashed()->findOrFail($id)->forceDelete();
        toast('Data berhasil di delete', 'success');
        return redirect()->route('kelas.trash');
    }
}
