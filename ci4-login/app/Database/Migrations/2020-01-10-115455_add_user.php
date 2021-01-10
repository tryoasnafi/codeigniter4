<?php

namespace App\Database\Migration;

use CodeIgniter\Database\Migration;

class AddUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'              => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'full_name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'email'           => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'unique'         => TRUE,
            ],
            'password'        => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
