<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
      for ($i = 0; $i < 10; $i++) {
        $new_project = new Project();
        $new_project->name = $faker->company();
        $new_project->creator = $faker->name();
        $new_project->objective = $faker->word();
        $new_project->description = $faker->text();
        $new_project->save();
      }
    }
}
