<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       
        /*  DB::table("users")->insert(["name"=>"Admin Admin","email"=>"admin@admin.com","password"=>"password","email_verified_
        at"=>new DateTime, "remember_token"=>"123AKH"]);*/   //for first admin\


        // \App\Models\Companie:: factory(25)->create(); //for compnies table

        //\App\Models\Employee::factory(25)->create();   //for employee table.
    }
}
