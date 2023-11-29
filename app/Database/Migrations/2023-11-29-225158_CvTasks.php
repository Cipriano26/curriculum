<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CvTasks extends Migration
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
            'id_job' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'task' => [
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
        $this->forge->createTable('cvTasks');

        // Insertar datos
        $data = [        
            [ 
                'id_user' => 1,
                'id_job' => 1,
                'task' => 'Desarrollo web full stack',
                'description' => 'Participar en el desarrollo de aplicaciones web, desde la creación de la interfaz de usuario (front-end) hasta la implementación del backend y la integración con bases de datos y servicios',
                'status' => 'active',
            ], 
            [ 
                'id_user' => 1,
                'id_job' => 1,
                'task' => 'Solución de problemas en tiempo real',
                'description' => 'Responder a incidencias y problemas que surjan en los sistemas en producción, identificando rápidamente las causas y aplicando soluciones adecuadas para minimizar el impacto en los usuarios',
                'status' => 'active',
            ], 
            [ 
                'id_user' => 1,
                'id_job' => 1,
                'task' => 'Mantenimiento y mejoras',
                'description' => 'Realizar actualizaciones y mejoras en sistemas existentes para mantenerlos actualizados, optimizar su rendimiento y añadir nuevas funcionalidades en función de los requisitos del negocio.',
                'status' => 'active',
            ], 
            [ 
                'id_user' => 1,
                'id_job' => 1,
                'task' => 'Enseñar a los nuevos',
                'description' => 'Ayudar en la formación de nuevos miembros del equipo o desarrolladores juniors, compartiendo conocimientos y asesorándolos en las mejores prácticas de desarrollo.',
                'status' => 'active',
            ], 
            [ 
                'id_user' => 1,
                'id_job' => 1,
                'task' => 'Documentación de procedimientos',
                'description' => 'Crear y mantener documentación técnica sobre el código, procesos y procedimientos utilizados en el desarrollo y mantenimiento de los sistemas, para facilitar la colaboración y comprensión entre los miembros del equipo.',
                'status' => 'active',
            ], 
            [ 
                'id_user' => 1,
                'id_job' => 1,
                'task' => 'Creación y mantenimiento de entornos de prueba y desarrollo',
                'description' => 'Configurar y mantener entornos de pruebas y desarrollo que permitan a los desarrolladores probar nuevas funcionalidades y realizar cambios sin afectar el entorno de producción.',
                'status' => 'active',
            ], 
            [ 
                'id_user' => 1,
                'id_job' => 1,
                'task' => 'Seguimiento de tareas y procesos del grupo',
                'description' => 'Participar en reuniones de seguimiento, reportar el progreso de las tareas y colaborar con otros miembros del equipo para asegurar que los proyectos avancen de acuerdo con los plazos establecidos.',
                'status' => 'active',
            ], 
            [ 
                'id_user' => 1,
                'id_job' => 1,
                'task' => 'Investigación y aprendizaje',
                'description' => 'Continuar desarrollando habilidades técnicas y mantenerse actualizado sobre las últimas tecnologías y tendencias en el desarrollo web.',
                'status' => 'active',
            ], 
            [ 
                'id_user' => 1,
                'id_job' => 1,
                'task' => 'Colaboración en equipo',
                'description' => 'Trabajar en equipo con otros desarrolladores, diseñadores y miembros del equipo para alcanzar los objetivos comunes del proyecto.',
                'status' => 'active',
            ], 
        ];

        $this->db->table('cvTasks')->insertBatch($data);
    }

    public function down()
    {
        $this->forge->dropTable('cvTasks');
    }
}
