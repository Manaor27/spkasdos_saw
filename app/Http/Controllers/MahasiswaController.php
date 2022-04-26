<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
use App\Models\Evaluasi;
use Auth;
Use RealRashid\SweetAlert\Facades\Alert;

class MahasiswaController extends Controller
{
    public function index() {
        $al = Alternatif::all();
        $none = Alternatif::where('id_user',Auth::user()->id)->first();
        return view('mahasiswa.home', compact('none'));
    }

    public function form() {
        return view('mahasiswa.form');
    }

    public function simpan(Request $request) {
        $transkrip = $request->file('transkrip');
        $transkripNama = $transkrip->getClientOriginalName();
        $transkrip->move('transkrip/', $transkripNama);
        $lamaran = $request->file('lamaran');
        $lamaranNama = Auth::user()->kode.'_lamaran.pdf';
        $lamaran->move('lamaran/', $lamaranNama);
        Alternatif::create([
            'id_user' => Auth::id(),
            'transkrip' => $transkripNama,
            'lamaran' => $lamaranNama
        ]);
        $al = Alternatif::all();
        foreach ($al as $key => $value) {
            $id = $value->id;
        }
        Evaluasi::create([
            'id_alternatif' => $id,
            'id_kriteria' => '1',
            'value' => $request->ipk
        ]);
        Evaluasi::create([
            'id_alternatif' => $id,
            'id_kriteria' => '2',
            'value' => $request->ips
        ]);
        Evaluasi::create([
            'id_alternatif' => $id,
            'id_kriteria' => '3',
            'value' => $request->nilai
        ]);
        return redirect("/home")->with('success', 'Task Created Successfully!');
    }
}
