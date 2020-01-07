<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Crud extends Migration
{
	public function up()
	{
		//
		 $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => '10',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],

                        'username'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],

                        'email'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],
                        'password' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                                'null'           => TRUE,
                        ],
                ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('task2');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		  $this->forge->dropTable('task2');
	}
}
