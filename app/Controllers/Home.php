<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\StudiesModel;
use App\Models\WorksModel;
use App\Models\TasksModel;
use App\Models\SkillsModel;
use App\Models\AbilitiesModel;

class Home extends BaseController
{
    public function index(): string
    {
        $cv_data['name_header'] = "Cipriano Gorosito";
        $cv_data['job_position'] = "Web Developer";
        $cv_data['contact_links'] = [
            'github'    => 'https://github.com/Cipriano26',
            'twitter'   => 'https://twitter.com/ciprrriano',
            'instagram' => 'https://www.instagram.com/ciprianogn/',
            'whatsapp'  => 'https://web.whatsapp.com/send/?phone=541128173122&text=Hola+Cipriano%21',
            'email'     => 'mailto:nahuelgorosito1983@gmail.com'
        ];
        $cv_data['message_short'] = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ratione tenetur maxime quae. Eaque excepturi qui, officiis nisi fugit tempore. Culpa at ex veritatis nihil, eius voluptatem. Quis, natus ipsam!';
        $cv_data['message_long'] = [
            'Sobre mi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ratione tenetur maxime quae. Eaque excepturi qui, officiis nisi fugit tempore. Culpa at ex veritatis nihil, eius voluptatem. Quis, natus ipsam!',
            'Inicios' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ratione tenetur maxime quae. Eaque excepturi qui, officiis nisi fugit tempore. Culpa at ex veritatis nihil, eius voluptatem. Quis, natus ipsam!',
            'Proyectos' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ratione tenetur maxime quae. Eaque excepturi qui, officiis nisi fugit tempore. Culpa at ex veritatis nihil, eius voluptatem. Quis, natus ipsam!',
        ];

      
        $studies = new StudiesModel();
        $works = new WorksModel();
        $tasks = new TasksModel();
        $skills = new SkillsModel();
        $abilities = new AbilitiesModel();

        $cv_data['studies'] = $studies->findAll();
        $cv_data['works'] = $works->findAll();
        $cv_data['tasks'] = $tasks->findAll();
        $cv_data['skills'] = $skills->findAll();
        $cv_data['abilities'] = $abilities->findAll();
        
        $cv_data['message_contact'] = '¡Gracias por visitar mi cv web! Si te intereso lo que viste y estás buscando un programador para tu próximo proyecto, no dudes en ponerte en contacto conmigo. ¡Espero saber de usted pronto!';
        $cv_data['contact_info'] = [
            'geo-alt' => 'Avellaneda, Buenos Aires, Argentina',
            'envelope' => 'nahuelgorosito1983@gmail.com.ar',
            'whatsapp' => '11 2817 3122'
        ];

        return view('curriculum', ['data' => $cv_data]);
    }
}
