<?php

use Illuminate\Database\Seeder;

class FavoriteIndexTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('favorite_index')->delete();
        
        DB::table('favorite_index')->insert([
           'user_id' => 1,
           'issue_id' => 1,
           'created_at'    => date('Y-m-d H:m:s')
        ]);
        DB::table('favorite_index')->insert([
           'user_id' => 1,
           'issue_id' => 3,
           'created_at'    => date('Y-m-d H:m:s')
        ]);
    }
}
