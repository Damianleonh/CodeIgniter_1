<?php namespace App\Controllers;

use App\Models\MovieModel;
use App\Controllers\BaseController;

class Movie extends BaseController {

    ////////////////////////

    private function loadDefautlView($data, $title, $view)
    {
        $dataHeader = [
            "title" => $title
        ];
        echo view("dashboard/templates/header", $dataHeader);
        echo view("dashboard/movie/$view", $data);
        echo view("dashboard/templates/footer");
    }

    ////////////////////////

    public function index(){
        $movie = new MovieModel();
        $data = [
            "movies" => $movie->asObject()->paginate(10),
            'pager' => $movie->pager
        ];
        $this->loadDefautlView($data, "Listado de películas", "index");
    }
    
    public function create()
    {
        echo "Datos: ";
        echo $this->request->getPost('title');

        
    }
    ////////////////////////

    public function show($id){
        $movie = new MovieModel(); 
        var_dump($movie->get($id));
    }

    ////////////////////////

    public function new(){
        $this -> loadDefautlView([], "Crear pelicula", "new");

    }

    ////////////////////////    


    ////////////////////////    

}