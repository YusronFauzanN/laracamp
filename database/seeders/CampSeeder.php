<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => 'gila-belajar',
                'price' => '280'
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price' => '140'
            ]
        ];
        // Memasukan Seed ke Tabel Camp
        // 1st Method sudah termasuk created_at dan updated_at
        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }

    }
}
