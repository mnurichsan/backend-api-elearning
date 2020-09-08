<?php

namespace App\Http\Controllers;

use App\Model\Jurusan;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use Alert;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('jurusan.index', compact('jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
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
            'description' => 'required'
        ]);
        $image = $request->image;
        $imageName =  time() . $image->getClientOriginalName();
        $image->move('asset_backend/img/upload/jurusan', $imageName);

        $jurusan = [
            'id' => Uuid::generate(4),
            'name' => $request->name,
            'description' => $request->description,
            'image' => 'asset_backend/img/upload/jurusan/' . $imageName
        ];

        Jurusan::create($jurusan);
        toast('Data berhasil di tambah', 'success');
        return redirect()->route('jurusan.index');
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
        $jurusan = Jurusan::findOrFail($id);
        return view('jurusan.edit', compact('jurusan'));
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
        $jurusanData =  Jurusan::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);


        if ($request->has('image')) {
            $image = $request->image;
            $imageName =  time() . $image->getClientOriginalName();
            $image->move('asset_backend/img/upload/jurusan', $imageName);

            $jurusan = [
                'name' => $request->name,
                'description' => $request->description,
                'image' => 'asset_backend/img/upload/jurusan/' . $imageName
            ];

            $file_path = $jurusanData->image;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        } else {
            $jurusan = [
                'name' => $request->name,
                'description' => $request->description
            ];
        }

        $jurusanData->update($jurusan);
        toast('data berhasil di update', 'success');
        return redirect()->route('jurusan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jurusan::findOrFail($id)->delete();
        toast('data berhasil di hapus');
        return redirect()->back();
    }

    public function getTrash()
    {
        $jurusans = Jurusan::onlyTrashed()->get();
        return view('jurusan.trash', compact('jurusans'));
    }

    public function restore($id)
    {
        Jurusan::onlyTrashed()->findOrFail($id)->restore();
        toast('data berhasil di restore', 'success');
        return redirect()->back();
    }

    public function delete($id)
    {
        Jurusan::onlyTrashed()->findOrFail($id)->forceDelete();
        toast('data berhasil di hapus', 'success');
        return redirect()->back();
    }
}
