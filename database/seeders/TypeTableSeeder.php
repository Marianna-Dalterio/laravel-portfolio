<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //popolo la tabella dei Types con questo seeder

        $types = ['Front-end', 'Back-end', 'Fullstack', 'Design', 'DevOps'];

        foreach ($types as $typeName) {
            $newType = new Type();

            $newType->name = $typeName;

            $newType->save();
        }
    }
}
