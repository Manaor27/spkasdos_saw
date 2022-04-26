<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'kode' => '0502049501',
            'name' => 'Gabriel Indra W.T, S.Kom., M.Kom.',
            'foto' => 'pak_indra.png',
            'email' => 'gabriel@gmail.com',
            'password' => Hash::make('gabriel123'),
            'role' => 'dosen',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('users')->insert([
            'kode' => '72190331',
            'name' => 'Gabriel Manaor Adi Pratama',
            'foto' => '72190331.jpg',
            'email' => 'manaor@gmail.com',
            'password' => Hash::make('manaor123'),
            'role' => 'mahasiswa',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('users')->insert([
            'kode' => '72190315',
            'name' => 'Ferry',
            'foto' => '72190315.jpg',
            'email' => 'ferry@gmail.com',
            'password' => Hash::make('ferry123'),
            'role' => 'mahasiswa',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('users')->insert([
            'kode' => '72190273',
            'name' => 'Yonathan Sebastian',
            'foto' => '72190273.jpg',
            'email' => 'jonas@gmail.com',
            'password' => Hash::make('jonas123'),
            'role' => 'mahasiswa',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('users')->insert([
            'kode' => '72190325',
            'name' => 'Indra Nugraha',
            'foto' => '72190325.jpg',
            'email' => 'indra@gmail.com',
            'password' => Hash::make('indra123'),
            'role' => 'mahasiswa',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
    }
}
