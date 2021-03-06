<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;
Use RealRashid\SweetAlert\Facades\Alert;

class KriteriaController extends Controller
{
    public function edit($id) {
        $k = Kriteria::find($id);
        return view('dosen.editkriteria', compact('k'));
    }
    
    public function simpan(Request $request, $id) {
        $k = Kriteria::find($id);
        $k->kriteria = $request->kriteria;
        $k->bobot = $request->bobot;
        $k->atribut = $request->atribut;
        $k->save();
        alert()->success('Berhasil','Kriteria Berhasil Di Ubah!');
        return redirect('/kriteria');
    }
}
