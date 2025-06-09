<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            SolusiPenyakitSeeder::class,
        ]);
    }
}

class SolusiPenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_solusi_penyakits')->delete();
        DB::table('solusi_penyakits')->delete();
        DB::table('penyakits')->delete();

        // Data penyakit
        $penyakits = [
            ['id_penyakit' => 1, 'nama_penyakit' => 'Karat Daun', 'deskripsi' => ''],
            ['id_penyakit' => 2, 'nama_penyakit' => 'Hawar Daun', 'deskripsi' => ''],
            ['id_penyakit' => 3, 'nama_penyakit' => 'Bercak Daun', 'deskripsi' => ''],
        ];
        DB::table('penyakits')->insert($penyakits);

        // Data solusi
        $solusis = [
            [
                'id_penyakit' => 1,
                'penyebab' => "Penyakit ini disebabkan oleh jamur bernama Puccinia sorghi.\nJamur mudah menyebar lewat angin.\nCuaca lembap dan suhu hangat mempercepat penyebarannya.",
                'gejala' => "Muncul bintik-bintik kecil berwarna oranye kecoklatan di daun.\nDaun lama-lama mengering dan menjadi coklat.\nTanaman tumbuh lebih lambat dan hasil panen bisa turun.",
                'solusi' => "Tanam jagung yang tahan karat daun.\nJangan menanam jagung terus-menerus di lahan yang sama.\nBersihkan sisa tanaman jagung yang sakit setelah panen.\nJika penyakit banyak menyebar, bisa semprot fungisida (obat jamur) sesuai anjuran.",
            ],
            [
                'id_penyakit' => 2,
                'penyebab' => "Disebabkan oleh jamur Exserohilum turcicum.\nMenyukai cuaca basah atau lembap dan suhu yang tidak terlalu panas.\nMenyebar lewat air hujan dan angin.",
                'gejala' => "Muncul bercak panjang seperti luka bakar di daun, berwarna coklat keabu-abuan.\nDaun cepat kering dari ujung sampai ke tengah.\nTanaman jadi tidak kuat karena fotosintesis terganggu.",
                'solusi' => "Gunakan benih jagung yang tahan hawar.\nGanti tanaman selain jagung setelah panen.\nBakar atau singkirkan daun dan batang yang sakit.\nSemprotkan fungisida bila serangan parah.",
            ],
            [
                'id_penyakit' => 3,
                'penyebab' => "Disebabkan oleh jamur Cercospora zeae-maydis.\nMenyukai cuaca hangat dan lembap.\nLahan yang terus ditanami jagung bisa memicu munculnya penyakit ini.",
                'gejala' => "Daun jagung muncul bercak abu-abu kecil, lalu melebar memanjang.\nBercak biasanya sejajar dengan urat daun.\nDaun menjadi lemah dan bisa rusak berat.",
                'solusi' => "Pilih benih jagung yang tahan terhadap bercak daun.\nLakukan pergiliran tanaman (rotasi), jangan menanam jagung terus-menerus.\nBeri jarak antar tanaman agar udara bisa mengalir.\nGunakan fungisida jika penyakit menyebar banyak.",
            ],
        ];
        foreach ($solusis as $solusi) {
            DB::table('solusi_penyakits')->insert([
                'id_penyakit' => $solusi['id_penyakit'],
                'penyebab' => $solusi['penyebab'],
                'gejala' => $solusi['gejala'],
                'solusi' => $solusi['solusi'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
