<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ["user_id"=>1,"title"=>"Post One Title","content"=>"Post One Content"],
            ["user_id"=>1,"title"=>"Post Two Title","content"=>"Post Two Content"],
            ["user_id"=>1,"title"=>"Post Three Title","content"=>"Post Three Content"],
            ["user_id"=>1,"title"=>"Post Four Title","content"=>"Post Four Content"]

        ]);
    }
}
