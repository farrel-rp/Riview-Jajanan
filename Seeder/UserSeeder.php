<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [

            [
                'nama'=>'Administrator',
                'email'=>'admin@gmail.com',
                'password'=>password_hash('admin123',PASSWORD_DEFAULT),
                'role'=>'admin'
            ],

            [
                'nama'=>'Farrel',
                'email'=>'user@gmail.com',
                'password'=>password_hash('user123',PASSWORD_DEFAULT),
                'role'=>'user'
            ]

        ];

        $this->db->table('users')->insertBatch($data);
    }
}
