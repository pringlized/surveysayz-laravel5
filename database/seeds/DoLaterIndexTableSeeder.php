<?php

use Illuminate\Database\Seeder;

class DoLaterIndexTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('do_later_index')->delete();
        
        DB::table('do_later_index')->insert([
            'user_id' => 1,
            'issue_id' => 3
        ]);
    }
}
