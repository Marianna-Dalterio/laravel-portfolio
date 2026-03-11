<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{



    public function index()
    {
        //in api non restituiamo una view bensì dati in formato json
        //prima recupero tutti i dati dal model e li salvo in una variabile, poi li passo come valore a "data"
        // $projects = Project::all();

        $projects = Project::with(["type", "technologies"])->get();



        return response()->json(
            [
                "success" => true,
                "data" => $projects
            ]
        );
    }
}
