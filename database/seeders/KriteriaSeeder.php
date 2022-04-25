<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('saw_kriteria')->insert([
            'kriteria' => 'Indeks Prestasi Kumulatif',
            'bobot' => '30',
            'atribut' => 'benefit',
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('saw_kriteria')->insert([
            'kriteria' => 'Indeks Prestasi Semester',
            'bobot' => '30',
            'atribut' => 'benefit',
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('saw_kriteria')->insert([
            'kriteria' => 'Nilai MataKuliah',
            'bobot' => '40',
            'atribut' => 'benefit',
            'created_at' => \Carbon\Carbon::now()
        ]);
    }
}
