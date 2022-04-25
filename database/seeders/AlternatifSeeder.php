<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('saw_alternatif')->insert([
            'id_user' => '2',
            'created_at' => \Carbon\Carbon::now()
        ]);
        DB::table('saw_alternatif')->insert([
            'id_user' => '3',
            'created_at' => \Carbon\Carbon::now()
        ]);
    }
}
