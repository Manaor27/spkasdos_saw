<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;
    protected $table = "saw_alternatif";
    protected $fillable = ['id_user','transkrip','lamaran'];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function evaluasi() {
        return $this->hasOne(Evaluasi::class, 'id_alternatif');
    }
}
