<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
Use RealRashid\SweetAlert\Facades\Alert;

class AlternatifController extends Controller
{
    public function hapus($id) {
        $srt = Alternatif::find($id);
        $srt->delete();
        alert()->success('Berhasil','Kriteria Berhasil Di Hapus!');
        return redirect('/alternatif');
    }
}
