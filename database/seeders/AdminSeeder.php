<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'nama_admin' => 'Admin Satu',
            'nama_pengguna_admin' => 'admin1',
            'password' => Hash::make('654321'), // gunakan hash!
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
