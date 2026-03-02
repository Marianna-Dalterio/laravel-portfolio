<?php

namespace Database\Seeders;

use App\Models\Project;
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

        // Creo un array di categorie verosimili
        $categories = ['Front-end', 'Back-end', 'Fullstack', 'Design', 'Mobile'];

        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();

            $newProject->project_name = $faker->sentence(3);
            $newProject->client = $faker->name();

            // Assegno un tipo casuale dall'array sopra
            $newProject->type = $faker->randomElement($categories);

            $newProject->date = $faker->date();
            $newProject->overview = $faker->paragraph();

            $newProject->save();
        }
    }
}
