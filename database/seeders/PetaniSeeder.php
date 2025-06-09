<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetaniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('petanis')->insert([
            'nama_petani' => 'Petani Satu',
            'nama_pengguna_petani' => 'petani1',
            'no_hp' => '08123456789',
            'password' => Hash::make('123456'), // gunakan hash!
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
