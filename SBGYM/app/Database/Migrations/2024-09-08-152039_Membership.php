<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Membership extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_membership' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'duration' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'price' => [
                'type' => 'DOUBLE',
            ],
            'membership_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_membership', true);
        $this->forge->createTable('membership');
    }

    public function down()
    {
        $this->forge->dropTable('membership');
    }
}
