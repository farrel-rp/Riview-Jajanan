<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePayments extends Migration
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
            'order_id'=>[
                'type'=>'VARCHAR',
                'constraint'=>100
            ],
            'user_email'=>[
                'type'=>'VARCHAR',
                'constraint'=>100
            ],
            'amount'=>[
                'type'=>'INT'
            ],
            'status'=>[
                'type'=>'VARCHAR',
                'constraint'=>30
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        $this->forge->addKey('id',true);
        $this->forge->createTable('payments');
    }

    public function down()
    {
        $this->forge->dropTable('payments');
    }
}
