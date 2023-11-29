<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CvWorks extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'job' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'company' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'place' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'start_date' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'end_date' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'job_status' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['active', 'inactive'],
                'default' => 'active',
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
                'on update' => 'CURRENT_TIMESTAMP',
            ],
            'deleted_at' => [
                'type' => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
                'on update' => 'CURRENT_TIMESTAMP',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('cvWorks');

        // Insertar datos
        $data = [
            [
                'id' => 1,
                'id_user' => 1,
                'job' => 'Web Developer',
                'company' => 'Via Bariloche S.A.',
                'category' => 'Desarrollo | Dev Ops',
                'place' => 'Buenos Aires, Argentina',
                'start_date' => '2022-08-01',
                'end_date' => null,
                'description' => null,
                'job_status' => 'current',
                'status' => 'active'
            ],
        ];

        $this->db->table('cvWorks')->insertBatch($data);
    }

    public function down()
    {
        $this->forge->dropTable('cvWorks');
    }
}
