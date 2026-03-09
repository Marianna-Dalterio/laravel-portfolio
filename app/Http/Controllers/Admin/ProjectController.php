<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
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
        //recupero tutti i tipi
        $types = Type::all();

        //recupero i linguaggi da technology
        $technologies = Technology::all();

        return view("admin.Projects.create", compact("types", "technologies"));
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
        $newProject->type_id = $data["type_id"];
        $newProject->date = $data["date"];
        $newProject->overview = $data["overview"];

        //salvo il nuovo dato nel db
        $newProject->save();

        //salvo le selezioni di linguaggi-technologies; controllo prima che ci siano delle selezioni e che non sia vuoto
        if ($request->has('technologies')) {
            $newProject->technologies()->attach($data["technologies"]);
        }




        //faccio un redirect alla rotta show per vedere il nuovo progetto salvato
        return redirect()->route("projects.show", $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {

        // Carica le relazioni in anticipo per evitare troppe query al DB
        $project->load(['type', 'technologies']);
        return view("admin.Projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();
        $technologies = Technology::all();

        return view("admin.Projects.edit", compact("project", "types", "technologies"));
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
        $project->type_id = $data["type_id"];
        $project->date = $data["date"];
        $project->overview = $data["overview"];

        //aggiorno il progetto
        $project->update();

        //sincronizzo (sync) le modifiche della checkbox x selezione multipla; prima verifico se sto passando delle selezioni, altrimenti stacco (detach) tutte quelle collegate inizialmente
        if ($request->has('technologies')) {
            $project->technologies()->sync($data['technologies']);
        } else {
            $project->technologies()->detach();
        }



        return redirect()->route("projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();


        return redirect()->route("projects.index");
    }
}
