<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $price=200;
        $image=['asdasdasd'];
        for($i=0;$i<6;$i++){

            Service::create([
                'title'=>$faker->text('10'),
                'description'=>$faker->text('1000'),
                'price'=>$price,
                'image'=>serialize($image)

            ]);
        }
    }
}
