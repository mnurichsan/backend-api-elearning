<?php

namespace App\Http\Controllers;

use App\Model\Kelas;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = User::where('roles', 'Siswa')->get();
        return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelass = Kelas::all();
        return view('siswa.create', compact('kelass'));
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
            'email' => 'required',
            'password' => 'required',
            'konfirmpass' => 'required',
            'id_kelas' => 'required'
        ]);

        if ($request->password == $request->konfirmpass) {
            $siswa = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'id_kelas' => $request->id_kelas,
                'roles' => 'Siswa'
            ];
            User::create($siswa);
            toast('Data berhasil di tambah', 'success');
            return redirect()->route('siswa.index');
        } else {
            toast('Password tidak sama', 'error');
            return redirect()->route('siswa.create');
        }
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
        $siswa = User::findOrFail($id);
        $kelass = Kelas::all();
        return view('siswa.edit', compact('siswa', 'kelass'));
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
            'email' => 'required',
            'id_kelas' => 'required',
            'password' => 'nullable|string|min:8'
        ]);
        if ($request->password && $request->konfirmpass == "") {
            $siswa = [
                'name' => $request->name,
                'email' => $request->email,
                'id_kelas' => $request->id_kelas
            ];
        } else {
            if ($request->password == $request->konfirmpass) {
                $siswa = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'id_kelas' => $request->id_kelas,
                    'password' => Hash::make($request->password)
                ];
            } else {
                toast('Password tidak sama', 'error');
                return redirect()->route('siswa.edit', $id);
            }
        }
        User::findOrFail($id)->update($siswa);
        toast('data berhasil di update', 'success');
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        toast('data berhasil di hapus', 'success');
        return redirect()->route('siswa.index');
    }
}
