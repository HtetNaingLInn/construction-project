<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $users=[
                ["name"=>"Htet Naing Linn","email"=>"htetnainglinn143@gmail.com","role"=>"Admin"],
                ["name"=>"Mg Mg" ,"email"=>"mgmg@gmail.com","role"=>"Content Writer" ],
                ["name"=>"Aung Aung" ,"email"=>"aungaung@gmail.com","role"=>"Guest" ],   
                ["name"=>"Mya Mya" ,"email"=>"myamya@gmail.com","role"=>"Guest" ],   
                ["name"=>"Hla Hla" ,"email"=>"hlahla@gmail.com","role"=>"Guest" ],      
        ];
        foreach($users as $user)
        User::create([
            "name"=>$user["name"],
            "email"=>$user["email"],
            "password"=>Hash::make(123),
            "role"=>$user["role"]
        ]);
    }
} 
