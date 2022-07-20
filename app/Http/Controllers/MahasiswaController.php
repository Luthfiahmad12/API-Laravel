<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mahasiswa = Mahasiswa::orderBy('created_at')->paginate(20);
        // $data = array('title' => 'Data Mahasiswa', 'itemmahasiswa' => $mahasiswa);
        return view('mahasiswa.index', compact('mahasiswa'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = array('title' => 'Data Mahasiswa');
        return view('mahasiswa.create');
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
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswa',
            'alamat' => '',
            'telp' => 'required|unique:mahasiswa',
        ]);
        $input = $request->all();
        $mahasiswa = Mahasiswa::create($input);
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', $mahasiswa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        // $mahasiswa = Mahasiswa::findOrFail($id);
        // $data = array(
        //     'title' => 'Form Edit mahasiswa',
        //     'itemmahasiswa' => $mahasiswa
        // );
        return view('mahasiswa.edit', compact('mahasiswa'));
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
            'nama' => 'required',
            'nim' => 'required',
            'alamat' => '',
            'telp' => 'required',
        ]);
        $mahasiswa = Mahasiswa::findOrFail($id);
        $input = $request->all();
        $mahasiswa->update($input);
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        if ($mahasiswa->delete()) {
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Data gagal dihapus');
        }
    }
}
