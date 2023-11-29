<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CvStudies extends Migration
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
            'study' => [
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
            'study_status' => [
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
        $this->forge->createTable('cvStudies');

        // Insertar datos
        $data = [
            [
                'id_user' => 1, 
                'study' => 'Javascript Desarrollador Avanzado',
                'place' => 'EducacionIT',
                'start_date' => '2023-04-01',
                'description' =>'Certificacion en JavaScript Avanzado. Herramientas de AJAX Avanzado. Uso de APIs, SPA y REST. Pedidos asincronicos, promesas y eventos. Validacion de datos y paradigma de prototipos.',
                'study_status' => 'progress',
                'status' => 'active',
            ],
            [
                'id_user' => 1, 
                'study' => 'Angular 13',
                'place' => 'EducacionIT',
                'start_date' => '2023-03-01',
                'description' =>'Certificacion en Angular. Introduccion a TypeScript. Diseño de componentes, modulos y servicios. Uso de Router, Forms, Template y Bindings. Inyeccion de dependencias. Consumo de recursos externos con HttpClient.',
                'study_status' => 'finished',
                'status' => 'active',
            ],
            [
                'id_user' => 1, 
                'study' => 'PHP MVC Laravel',
                'place' => 'EducacionIT',
                'start_date' => '2022-09-01',
                'description' =>'Certificacion en Laravel. Patrones de diseño y MVC. Gestion de Query Builder y Eloquent. Peticiones, validaciones, helpers y sessions. Uso de layouts y extensión de vistas con Blade.',
                'study_status' => 'finished',
                'status' => 'active',
            ],
            [
                'id_user' => 1, 
                'study' => 'Programación Web en PHP y MySQL',
                'place' => 'EducacionIT',
                'start_date' => '2022-02-01',
                'description' =>'Certificacion en PHP y MySQL. Arquitectura y controles de flujo. Conexion con bases de datos. Manejo de sesiones y cookies. Autenticacion de usuarios.',
                'study_status' => 'finished',
                'status' => 'active',
            ],
        ];

        $this->db->table('cvStudies')->insertBatch($data);
    }

    public function down()
    {
        $this->forge->dropTable('cvStudies');
    }
}
