<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //popolo la mia tabella usando il seeder e il faker
    public function run(Faker $faker): void
    {

        //recupero i Types 
        $types = Type::all();
        // 1. Recupero tutti gli ID delle tecnologie già creati con il TechnologyTableSeeder
        $technologyIds = Technology::all()->pluck('id');

        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();

            $newProject->project_name = $faker->sentence(3);
            $newProject->client = $faker->name();

            //assegnazione: prendo un ID casuale dai tipi esistenti 
            $newProject->type_id = $types->random()->id;

            $newProject->date = $faker->date();
            $newProject->overview = $faker->paragraph();

            $newProject->save();

            // 2. BONUS: Collego da 1 a 4 tecnologie a caso
            // Prendo un array di ID casuali tra quelli disponibili
            $randomTechs = $faker->randomElements($technologyIds, rand(1, 4));

            // Uso il metodo attach() sulla relazione
            $newProject->technologies()->attach($randomTechs);
        }
    }
}
