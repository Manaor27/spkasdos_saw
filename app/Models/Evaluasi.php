<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluasi extends Model
{
    use HasFactory;
    protected $table = "saw_evaluasi";
    protected $fillable = ['id_alternatif','id_kriteria'];

    public function alternatif() {
        return $this->belongsTo(Alternatif::class, 'id_alternatif');
    }

    public function kriteria() {
        return $this->belongsTo(Kriteria::class, 'id_kriteria');
    }
}
