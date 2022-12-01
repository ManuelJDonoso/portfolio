<?php
require_once "../../../config/DB.php";


//  $tecnologia=DB::getProject("1");
//  var_dump($tecnologia);

// $proyectos=DB::getProjectsByTechnologies(["css"]);
//   var_dump($proyectos);

    //       0 => string '1' (length=1)
    //   'titulo' => string 'PORTFOLIO' (length=9)
    //   1 => string 'PORTFOLIO' (length=9)
    //   'Title' => string 'PORTFOLIO' (length=9)
    //   2 => string 'PORTFOLIO' (length=9)
    //   'parrafos' => string 'portfolio personal, responsive estructurado de forma modular y donde mostrar los datos de contactos, tecnologias conocidas y proyectos' (length=134)
    //   3 => string 'portfolio personal, responsive estructurado de forma modular y donde mostrar los datos de contactos, tecnologias conocidas y proyectos' (length=134)
    //   'paragraph' => string 'personal portfolio, responsive, structured in a modular way and where to show contact data, known technologies and projects' (length=123)
    //   4 => string 'personal portfolio, responsive, structured in a modular way and where to show contact data, known technologies and projects' (length=123)
    //   'dir_proyect' => string 'public/assets/images/project_portfolio.jpg' (length=42)
    //   5 => string 'public/assets/images/project_portfolio.jpg' (length=42)
    //   'dir_code' => string '#' (length=1)


 $data =["titulo"=>"titulo","Title"=>"Title","parrafos"=>"parrafos4","paragraph"=>"paragraph","dir_project"=>"dir_proyect","dir_code"=>"dir_code","dir_img"=>"img"];
 $data2 =["html","css"];
// // $data3="php";
   DB::modifyProject(8,$data,$data2);
//  DB::addNewProject($data,$data2);
//$id=DB::getIdTechnologies($data3);