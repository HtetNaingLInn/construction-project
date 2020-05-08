<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $image=["aewawew"];
        for($i=0;$i<20;$i++){
            Blog::create([
                'title'=> $faker->text('10'),
                'content'=>$faker->text('100'),
                'user_id'=> rand(1,5),
                'image'=>serialize($image)
            ]);

        }
    }
}
