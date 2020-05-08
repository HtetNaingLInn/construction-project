<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $img=["aewawew"];

        $faker = Faker\Factory::create();

        for($i=0;$i<20;$i++){

            Project::create([
                'title'=>$faker->text('10'),
                'description'=>$faker->text('1000'),
                'cat_id'=>rand(1,6),
                'imgs'=>serialize($img)

            ]);

        }
    }
}
