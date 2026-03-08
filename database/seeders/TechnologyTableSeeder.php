<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technology = ["PHP", "JavaScript", "HTML", "CSS", "VueJS", "ReactJS", "Angular", "Laravel", "Symfony", "Django"];

        foreach ($technology as $technologyName) {

            $newTechnology = new Technology();
            $newTechnology->name = $technologyName;
            $newTechnology->color = $faker->hexColor();

            $newTechnology->save();
        }
    }
}
