<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = User::where('roles', 'Guru')->get();

        return view('guru.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
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
            'konfirmpass' => 'required'
        ]);

        if ($request->password == $request->konfirmpass) {
            $guru = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'roles' => 'Guru'
            ];
            User::create($guru);
            toast('Data berhasil di tambah', 'success');
            return redirect()->route('guru.index');
        } else {
            toast('Password tidak sama', 'error');
            return redirect()->route('guru.create');
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
        $guru = User::findOrFail($id);

        return view('guru.edit', compact('guru'));
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
            'password' => 'nullable|string|min:8'
        ]);

        if ($request->password && $request->konfirmpass == "") {
            $guru = [
                'name' => $request->name,
                'email' => $request->email
            ];
        } else {
            if ($request->password == $request->konfirmpass) {
                $guru = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ];
            } else {
                toast('Password tidak sama', 'error');
                return redirect()->route('guru.edit', $id);
            }
        }
        User::findOrFail($id)->update($guru);
        toast('data berhasil di update', 'success');
        return redirect()->route('guru.index');
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
        return redirect()->route('guru.index');
    }
}
