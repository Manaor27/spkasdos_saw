<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MatriksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('saw_evaluasi')->insert([
            'id_alternatif' => '1',
            'id_kriteria' => '1',
            'value' => '3.80',
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('saw_evaluasi')->insert([
            'id_alternatif' => '1',
            'id_kriteria' => '2',
            'value' => '3.91',
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('saw_evaluasi')->insert([
            'id_alternatif' => '1',
            'id_kriteria' => '3',
            'value' => '4.00',
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('saw_evaluasi')->insert([
            'id_alternatif' => '2',
            'id_kriteria' => '1',
            'value' => '3.67',
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('saw_evaluasi')->insert([
            'id_alternatif' => '2',
            'id_kriteria' => '2',
            'value' => '3.67',
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('saw_evaluasi')->insert([
            'id_alternatif' => '2',
            'id_kriteria' => '3',
            'value' => '3.91',
            'created_at' => \Carbon\Carbon::now()
        ]);
    }
}
