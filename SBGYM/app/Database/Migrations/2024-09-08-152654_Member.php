<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Member extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_member' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_membership' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Phone_number' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'gender' => [
                'type' => 'ENUM',
                'constraint' => ['male', 'female'],
                'default' => 'male',
            ],
            'join_date' => [
                'type' => 'DATE',
            ],
            'date_birth' => [
                'type' => 'DATE',
            ],
            'address' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id_member', true);
        $this->forge->addForeignKey('id_membership', 'membership', 'id_membership', 'CASCADE', 'CASCADE');
        $this->forge->createTable('member');
    }

    public function down()
    {
        $this->forge->dropTable('member');
    }
}
