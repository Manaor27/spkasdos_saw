<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $table = "saw_kriteria";
    protected $fillable = ['kriteria','bobot','atribut'];

    public function evaluasi() {
        return $this->hasOne(Evaluasi::class, 'id_kriteria');
    }
}
