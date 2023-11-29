<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CvSkills extends Migration
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
            'skill' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'attribute' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'level' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'experience' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'description' => [
                'type' => 'TEXT',
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
        $this->forge->createTable('cvSkills');

        // Insertar datos
        $data = [          
            [
                'id_user' => 1, 
                'skill' => 'Framework', 
                'type' => 'Laravel', 
                'attribute' => 'Frameworks',
                'description' => 'icon: box', 
                'status' => 'active',
            ],
            [
                'id_user' => 1, 
                'skill' => 'Framework', 
                'type' => 'Codeigniter', 
                'attribute' => 'Frameworks', 
                'description' => 'icon: box', 
                'status' => 'active',
            ],
            [
                'id_user' => 1, 
                'skill' => 'Framework', 
                'type' => 'Angular', 
                'attribute' => 'Frameworks', 
                'description' => 'icon: box', 
                'status' => 'active',
            ],
            [
                'id_user' => 1, 
                'skill' => 'Framework', 
                'type' => 'JQuery', 
                'attribute' => 'Frameworks', 
                'description' => 'icon: box', 
                'status' => 'active',
            ],
            [
                'id_user' => 1, 
                'skill' => 'Framework', 
                'type' => 'Bootstrap', 
                'attribute' => 'Frameworks', 
                'description' => 'icon: box', 
                'status' => 'active',
            ],
            [
                'id_user' => 1, 
                'skill' => 'Lenguaje', 
                'type' => 'PHP', 
                'attribute' => 'Lenguajes', 
                'description' => 'icon: braces', 
                'status' => 'active',
            ],
            [
                'id_user' => 1, 
                'skill' => 'Lenguaje', 
                'type' => 'MySQL', 
                'attribute' => 'Lenguajes', 
                'description' => 'icon: braces', 
                'status' => 'active',
            ],
            [
                'id_user' => 1, 
                'skill' => 'Lenguaje', 
                'type' => 'SQLServer', 
                'attribute' => 'Lenguajes', 
                'description' => 'icon: braces', 
                'status' => 'active',
            ],
            [
                'id_user' => 1, 
                'skill' => 'Lenguaje', 
                'type' => 'JavaScript', 
                'attribute' => 'Lenguajes', 
                'description' => 'icon: braces', 
                'status' => 'active',
            ],
            [
                'id_user' => 1,
                'skill' => 'Lenguaje', 
                'type' => 'TypeScript', 
                'attribute' => 'Lenguajes', 
                'description' => 'icon: braces', 
                'status' => 'active',
            ],
            [
                'id_user' => 1,
                'skill' => 'Lenguaje', 
                'type' => 'HTML', 
                'attribute' => 'Lenguajes', 
                'description' => 'icon: braces', 
                'status' => 'active',
            ],
            [
                'id_user' => 1,
                'skill' => 'Lenguaje', 
                'type' => 'CSS', 
                'attribute' => 'Lenguajes', 
                'description' => 'icon: braces', 
                'status' => 'active',
            ],
            [
                'id_user' => 1,
                'skill' => 'Control de versiones', 
                'type' => 'GitLab', 
                'attribute' => 'DevOps', 
                'description' => 'icon: gear', 
                'status' => 'active',
            ],
            [
                'id_user' => 1,
                'skill' => 'Seguimiento', 
                'type' => 'Jira', 
                'attribute' => 'DevOps', 
                'description' => 'icon: gear', 
                'status' => 'active',
            ],
            [
                'id_user' => 1,
                'skill' => 'Entornos y servidores', 
                'type' => 'Apache', 
                'attribute' => 'DevOps', 
                'description' => 'icon: gear', 
                'status' => 'active',
            ],
            [
                'id_user' => 1,
                'skill' => 'Entornos y servidores', 
                'type' => 'Linux', 
                'attribute' => 'DevOps', 
                'description' => 'icon: gear', 
                'status' => 'active',
            ],
            [
                'id_user' => 1,
                'skill' => 'Automatizacion', 
                'type' => 'ArchivosBatch', 
                'attribute' => 'DevOps', 
                'description' => 'icon: gear', 
                'status' => 'active',
            ],
            [
                'id_user' => 1,
                'skill' => 'Automatizacion', 
                'type' => 'ArchivosBash', 
                'attribute' => 'DevOps', 
                'description' => 'icon: gear', 
                'status' => 'active',
            ],
            [
                'id_user' => 1,
                'skill' => 'Programa', 
                'type' => 'SQLServer', 
                'attribute' => 'Programas', 
                'description' => 'icon: cpu', 
                'status' => 'active',
            ],
            [
                'id_user' => 1,
                'skill' => 'Programa', 
                'type' => 'Postman', 
                'attribute' => 'Programas', 
                'description' => 'icon: cpu', 
                'status' => 'active',
            ],
            [
                'id_user' => 1,
                'skill' => 'Programa', 
                'type' => 'WinSCP', 
                'attribute' => 'Programas', 
                'description' => 'icon: cpu', 
                'status' => 'active',
            ],
            [
                'id_user' => 1,
                'skill' => 'Programa', 
                'type' => 'VirtualBox', 
                'attribute' => 'Programas', 
                'description' => 'icon: cpu', 
                'status' => 'active',
            ],
            [
                'id_user' => 1,
                'skill' => 'Programa', 
                'type' => 'Workbench', 
                'attribute' => 'Programas', 
                'description' => 'icon: cpu', 
                'status' => 'active',
            ],
            [
                'id_user' => 1,
                'skill' => 'DataBases',
                'type' => NULL, 
                'attribute' => NULL, 
                'description' => 'for abilities', 
                'status' => 'inactive',
            ],
            [
                'id_user' => 1,
                'skill' => 'Apis',
                'type' => NULL, 
                'attribute' => NULL, 
                'description' => 'for abilities', 
                'status' => 'inactive',
            ],
            [
                'id_user' => 1,
                'skill' => 'DevOps',
                'type' => NULL, 
                'attribute' => NULL, 
                'description' => 'for abilities', 
                'status' => 'inactive',
            ]
        ];

        $this->db->table('cvSkills')->insertBatch($data);
    }

    public function down()
    {
        $this->forge->dropTable('cvSkills');
    }
}
