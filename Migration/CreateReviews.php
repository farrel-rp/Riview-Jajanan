<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateReviews extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'auto_increment'=>true,
                'unsigned'=>true
            ],
            'nama_jajanan'=>[
                'type'=>'VARCHAR',
                'constraint'=>150
            ],
            'kategori'=>[
                'type'=>'VARCHAR',
                'constraint'=>100
            ],
            'rating'=>[
                'type'=>'INT',
                'constraint'=>1
            ],
            'review'=>[
                'type'=>'TEXT'
            ],
            'foto'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
                'null'=>true
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);

        $this->forge->addKey('id',true);
        $this->forge->createTable('reviews');
    }

    public function down()
    {
        $this->forge->dropTable('reviews');
    }
}
