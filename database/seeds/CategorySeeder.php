<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $names=[
            ['name'=>'commercial'],
            ['name'=>'education'],
            ['name'=>'government'],
            ['name'=>'infrastructure'],
            ['name'=>'residenial'],
            ['name'=>'healthcare'],
        ];

        foreach($names as $name)
        Category::create([
            'name'=>$name['name'],
            'description'=>$faker->text('100')
        ]);
        // foreach($names as $name)
        // $cat=new Category();
        // $cat->name=$name['name'];
        // $cat->description=$faker->text(100);
        // $cat->save();

    }
}


