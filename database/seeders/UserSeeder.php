<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        DB::table('admins')->insert([
            'id_admin' => 1,
            'nama_admin' => 'Admin Satu',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Petani
        DB::table('petanis')->insert([
            'id_petani' => 1,
            'nama_petani' => 'Petani Satu',
            'nama_pengguna_petani' => 'petani1',
            'no_hp' => '08123456789',
            'password' => Hash::make('passwordpetani'), // gunakan hash!
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
