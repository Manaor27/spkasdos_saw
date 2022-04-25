<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Evaluasi;

class DosenController extends Controller
{
    public function index() {
        return view('dosen.home');
    }

    public function kriteria() {
        $kriteria = Kriteria::all();
        return view('dosen.kriteria', compact('kriteria'));
    }

    public function alternatif() {
        $alter = Alternatif::all();
        return view('dosen.alternatif', compact('alter'));
    }

    public function preferensi() {
        $sql = DB::table('saw_kriteria')->select('bobot')->get();
        $W = array();
        foreach ($sql as $key => $row) {
            $W[] = $row->bobot;
        }

        $x = DB::table('saw_evaluasi')->join('saw_alternatif','id_alternatif','=','saw_alternatif.id')->select(DB::raw('saw_evaluasi.id_alternatif as id_alternatif, saw_alternatif.id_user as id_user, SUM(IF(saw_evaluasi.id_kriteria=1,saw_evaluasi.value,0)) AS C1, SUM(IF(saw_evaluasi.id_kriteria=2,saw_evaluasi.value,0)) AS C2, SUM(IF(saw_evaluasi.id_kriteria=3,saw_evaluasi.value,0)) AS C3'))->groupBy('saw_evaluasi.id_alternatif','saw_alternatif.id_user')->orderBy('saw_evaluasi.id_alternatif')->get();

        $A = array(1 => array(), 2 => array(), 3 => array(), 4 => array(), 5 => array());
        foreach ($x as $item => $row) {
            array_push($A[1], round($row->C1, 2));
            array_push($A[2], round($row->C2, 2));
            array_push($A[3], round($row->C3, 2));
        }

        $y = DB::table('saw_evaluasi')->join('saw_kriteria','id_kriteria','=','saw_kriteria.id')->select(DB::raw('saw_evaluasi.id_alternatif, SUM(IF(saw_evaluasi.id_kriteria=1,IF(saw_kriteria.atribut="benefit",saw_evaluasi.value' . '/' . max($A[1]) . ',' . min($A[1]) . '/' .'saw_evaluasi.value),0)) AS C1, SUM(IF(saw_evaluasi.id_kriteria=2,IF(saw_kriteria.atribut="benefit",saw_evaluasi.value' . '/' . max($A[2]) . ',' . min($A[2]) . '/' . 'saw_evaluasi.value),0)) AS C2, SUM(IF(saw_evaluasi.id_kriteria=3,IF(saw_kriteria.atribut="benefit",saw_evaluasi.value' . '/' . max($A[3]) . ',' . min($A[3]) . '/' . 'saw_evaluasi.value),0)) AS C3'))->groupBy('saw_evaluasi.id_alternatif')->orderBy('saw_evaluasi.id_alternatif')->get();

        $R = array();
        foreach ($y as $key => $row) {
            $R[$row->id_alternatif] = array($row->C1, $row->C2, $row->C3);
        }

        $i = 0;

        return view('dosen.preferensi', compact('W','R','i'));
    }

    public function matriks() {
        $x = DB::table('saw_evaluasi')->join('saw_alternatif','id_alternatif','=','saw_alternatif.id')->select(DB::raw('saw_evaluasi.id_alternatif as id_alternatif, saw_alternatif.id_user as id_user, SUM(IF(saw_evaluasi.id_kriteria=1,saw_evaluasi.value,0)) AS C1, SUM(IF(saw_evaluasi.id_kriteria=2,saw_evaluasi.value,0)) AS C2, SUM(IF(saw_evaluasi.id_kriteria=3,saw_evaluasi.value,0)) AS C3'))->groupBy('saw_evaluasi.id_alternatif','saw_alternatif.id_user')->orderBy('saw_evaluasi.id_alternatif')->get();

        $A = array(1 => array(), 2 => array(), 3 => array());
        foreach ($x as $item => $row) {
            array_push($A[1], round($row->C1, 2));
            array_push($A[2], round($row->C2, 2));
            array_push($A[3], round($row->C3, 2));
        }

        $r = DB::table('saw_evaluasi')->join('saw_kriteria','id_kriteria','=','saw_kriteria.id')->select(DB::raw('saw_evaluasi.id_alternatif, SUM(IF(saw_evaluasi.id_kriteria=1,IF(saw_kriteria.atribut="benefit",saw_evaluasi.value' . '/' . max($A[1]) . ',' . min($A[1]) . '/' .'saw_evaluasi.value),0)) AS C1, SUM(IF(saw_evaluasi.id_kriteria=2,IF(saw_kriteria.atribut="benefit",saw_evaluasi.value' . '/' . max($A[2]) . ',' . min($A[2]) . '/' . 'saw_evaluasi.value),0)) AS C2, SUM(IF(saw_evaluasi.id_kriteria=3,IF(saw_kriteria.atribut="benefit",saw_evaluasi.value' . '/' . max($A[3]) . ',' . min($A[3]) . '/' . 'saw_evaluasi.value),0)) AS C3'))->groupBy('saw_evaluasi.id_alternatif')->orderBy('saw_evaluasi.id_alternatif')->get();

        return view('dosen.matriks', compact('x','r'));
    }
}
