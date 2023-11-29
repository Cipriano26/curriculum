<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CvAbilities extends Migration
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
            'id_skill' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'ability' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
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
        $this->forge->createTable('cvAbilities');

        // Insertar datos
        $data = [ 
            [
                'id_user' => 1,
                'id_skill' => 24,
                'ability' => 'Diseño y administracion de bases de datos',
                'description' => 'Creacion y mantenimientos de esquemas de bases de datos',
                'status' => 'active',
            ],
            [
                'id_user' => 1, 
                'id_skill' => 24, 
                'ability' => 'Diseño y administracion de bases de datos',
                'description' => 'Definicion de tablas, relaciones y restricciones', 
                'status' => 'active'
            ],
            [
                'id_user' => 1, 
                'id_skill' => 24, 
                'ability' => 'Stored Procedures y Triggers',
                'description' => 'Diseño y desarrollo de stored procedures para optimizar consultas', 
                'status' => 'active'
            ],
            [
                'id_user' => 1, 
                'id_skill' => 24, 
                'ability' => 'Stored Procedures y Triggers',
                'description' => 'Implementación de triggers para manejar eventos y mantener la integridad de datos', 
                'status' => 'active'
            ],
            [
                'id_user' => 1, 
                'id_skill' => 24, 
                'ability' => 'Optimización de consultas',
                'description' => 'Análisis y mejora del rendimiento de consultas mediante índices y técnicas de optimización', 
                'status' => 'active'
            ],
            [
                'id_user' => 1, 
                'id_skill' => 24, 
                'ability' => 'Consultas complejas',
                'description' => 'Dominio de consultas SQL avanzadas para recuperar, filtrar y manipular datos de manera eficiente', 
                'status' => 'active'
            ],
            [
                'id_user' => 1, 
                'id_skill' => 25, 
                'ability' => 'Desarrollo de API REST full',
                'description' => 'Diseño y construcción de interfaces de API REST para interactuar con aplicaciones cliente.', 
                'status' => 'active'
            ],
            [
                'id_user' => 1, 
                'id_skill' => 25, 
                'ability' => 'Integración de servicios web',
                'description' => 'Conexión y comunicación con servicios de terceros utilizando API REST o SOAP.', 
                'status' => 'active'
            ],
            [
                'id_user' => 1, 
                'id_skill' => 25, 
                'ability' => 'Seguridad y autenticación',
                'description' => 'Implementación de mecanismos de autenticación y autorización en las APIs.', 
                'status' => 'active'
            ],
            [
                'id_user' => 1, 
                'id_skill' => 25, 
                'ability' => 'Documentación de API',
                'description' => 'Creación de documentación clara y completa para guiar a los desarrolladores en el uso de la API.', 
                'status' => 'active'
            ],
            [
                'id_user' => 1, 
                'id_skill' => 26, 
                'ability' => 'Automatización de despliegue',
                'description' => 'Programacion de archivos .bat y .bash para la automatizacion de despliegues en distintos entornos de los sistemas.', 
                'status' => 'active'
            ],
            [
                'id_user' => 1, 
                'id_skill' => 26, 
                'ability' => 'Gestión de entornos', 
                'description' => 'Configuración y administración de diferentes entornos (desarrollo, pruebas, producción).', 
                'status' => 'active'
            ],
        ];

        $this->db->table('cvAbilities')->insertBatch($data);
    }

    public function down()
    {
        $this->forge->dropTable('cvAbilities');
    }
}
