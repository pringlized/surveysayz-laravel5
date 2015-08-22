<?php

use Illuminate\Database\Seeder;

class ActivityTableSeeder extends Seeder
{
    private $data = array(
        'user_id' => 1,
        'title' => 'blah blah'
    );
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity')->delete();
        
        DB::table('activity')->insert([
           'user_id' => 1,
           'activity_type' => 'user_create',
           'created_at' => date('Y:m:d H:m:s'),
           'data' => json_encode($this->data)
        ]);
        DB::table('activity')->insert([
           'user_id' => 1,
           'activity_type' => 'user_confirmed',
           'created_at' => date('Y:m:d H:m:s'),
           'data' => json_encode($this->data)
        ]);
        DB::table('activity')->insert([
           'user_id' => 1,
           'activity_type' => 'issue_create',
           'created_at' => date('Y:m:d H:m:s'),
           'data' => json_encode($this->data)
        ]);
        DB::table('activity')->insert([
           'user_id' => 1,
           'activity_type' => 'response_create',
           'created_at' => date('Y:m:d H:m:s'),
           'data' => json_encode($this->data)
        ]);
        DB::table('activity')->insert([
           'user_id' => 2,
           'activity_type' => 'question_create',
           'created_at' => date('Y:m:d H:m:s'),
           'data' => json_encode($this->data)
        ]);
    }
}
