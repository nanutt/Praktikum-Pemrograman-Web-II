<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Users extends Migration{
    public function up(){
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],            
            'password' => [
                'type'       => 'TEXT',
                'constraint' => '50',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user', TRUE);
    }
    public function down(){
        $this->forge->dropTable('user');
    }
}