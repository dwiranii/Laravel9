<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\sekolah;

class SekolahController extends controller
{
    public function index()
    {
        $sekolahs =sekolah::get();
        return view('sekolahs.index') ->with('sekolahs',$sekolahs);
    }
    public function tambah()
    {
        return view('sekolahs.tambah');
    }

public function simpan(Request $request)
{
    $sekolah = new Sekolah();

    $sekolah->namasekolah = $request->namasekolah;
    $sekolah->alamat = $request->alamat;
    $sekolah->jurusan = $request->jurusan;
    $sekolah->jumlahguru = $request->jumlahguru;

    $sekolah->save();

    return redirect()->back();
 }

 public function edit($id)
{
    $sekolah = Sekolah::find($id);

    return view('sekolahs.edit',[
         'sekolah' => $sekolah,
    ]);

}

public function update(request $request, $id)
{
    $sekolah = Sekolah::find($id);

    
    $sekolah->namasekolah = $request->namasekolah;
    $sekolah->alamat = $request->alamat;
    $sekolah->jurusan = $request->jurusan;
    $sekolah->jumlahguru = $request->jumlahguru;


    $sekolah->save();

    return redirect()->route('sekolahs.index');
}

public function destroy($id)
{

    $sekolah = Sekolah::find($id);

    $sekolah->delete();

    return redirect()->route('sekolahs.index');
}
}