<?php

use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answer')->delete();
        
        DB::table('answer')->insert([
            'question_id' => 1,
            'sort_order' => 0,
            'answer' => 'Yes',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('answer')->insert([
            'question_id' => 1,
            'sort_order' => 1,
            'answer' => 'No',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('answer')->insert([
            'question_id' => 1,
            'sort_order' => 2,
            'answer' => 'Undecided',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        
        DB::table('answer')->insert([
            'question_id' => 2,
            'sort_order' => 0,
            'answer' => 'Always',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('answer')->insert([
            'question_id' => 2,
            'sort_order' => 1,
            'answer' => 'When surveilance will last longer than a set period of time',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('answer')->insert([
            'question_id' => 2,
            'sort_order' => 2,
            'answer' => 'Not Sure',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('answer')->insert([
            'question_id' => 2,
            'sort_order' => 3,
            'answer' => 'Warrants aren\'t relevant any longer',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        
        DB::table('answer')->insert([
            'question_id' => 4,
            'sort_order' => 0,
            'answer' => 'Yes',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('answer')->insert([
            'question_id' => 4,
            'sort_order' => 1,
            'answer' => 'No',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('answer')->insert([
            'question_id' => 4,
            'sort_order' => 2,
            'answer' => 'Undecided',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
      
        DB::table('answer')->insert([
            'question_id' => 5,
            'sort_order' => 0,
            'answer' => 'Yes',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('answer')->insert([
            'question_id' => 5,
            'sort_order' => 1,
            'answer' => 'No',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        
        DB::table('answer')->insert([
            'question_id' => 6,
            'sort_order' => 0,
            'answer' => 'Build a wall',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('answer')->insert([
            'question_id' => 6,
            'sort_order' => 1,
            'answer' => 'Hire more Border Patrol agents',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('answer')->insert([
            'question_id' => 6,
            'sort_order' => 2,
            'answer' => 'Penalize businesses who hire undocumented non-citizens',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('answer')->insert([
            'question_id' => 5,
            'sort_order' => 3,
            'answer' => 'Hire and deputize citizens',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        DB::table('answer')->insert([
            'question_id' => 5,
            'sort_order' => 4,
            'answer' => 'Change immigration policy',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
        
        
        
    }
}
