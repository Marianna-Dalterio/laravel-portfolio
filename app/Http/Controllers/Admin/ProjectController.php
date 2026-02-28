<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view("admin.Projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.Projects.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //recupero i dati inviati alla store con il metodo all() per ottenere tutte le coppie name-value
        $data = $request->all();

        //creo nuova istanza del model Project
        $newProject = new Project();

        //inserisco gli attributi 
        $newProject->project_name = $data["project_name"];
        $newProject->client = $data["client"];
        $newProject->date = $data["date"];
        $newProject->overview = $data["overview"];

        //salvo il nuovo dato nel db
        $newProject->save();



        //faccio un redirect alla rotta show per vedere il nuovo progetto salvato
        return redirect()->route("projects.show", $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("admin.Projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view("admin.Projects.edit", compact("project"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //recupero i dati della richiesta
        $data = $request->all();

        //modifico le informazioni contenute nel project
        $project->project_name = $data["project_name"];
        $project->client = $data["client"];
        $project->date = $data["date"];
        $project->overview = $data["overview"];

        //aggiorno il progetto
        $project->update();


        return redirect()->route("projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
