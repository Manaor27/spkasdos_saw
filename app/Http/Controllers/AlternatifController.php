<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;

class AlternatifController extends Controller
{
    public function delete($id) {
        $srt = Alternatif::find($id);
        $srt->delete();
        return redirect('/alternatif');
    }
}
