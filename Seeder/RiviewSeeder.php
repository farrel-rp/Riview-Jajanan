<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        $data=[

            [
                'nama_jajanan'=>'Seblak',
                'kategori'=>'Pedas',
                'rating'=>5,
                'review'=>'Seblak sangat enak dan pedas.'
            ],

            [
                'nama_jajanan'=>'Bakso Bakar',
                'kategori'=>'Bakaran',
                'rating'=>4,
                'review'=>'Rasanya gurih dan nikmat.'
            ],

            [
                'nama_jajanan'=>'Cimol',
                'kategori'=>'Gorengan',
                'rating'=>5,
                'review'=>'Kenyal dan gurih.'
            ]

        ];

        $this->db->table('reviews')->insertBatch($data);
    }
}
