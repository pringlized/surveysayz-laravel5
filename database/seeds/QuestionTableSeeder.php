<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question')->delete();
        
        DB::table('question')->insert([
            'issue_id'      => 1,
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s'),
            'sort_order'    => 0,
            'question_type' => 'single_choice',
            'question'      => 'Is it important that the NSA have unfettered access to phone data?'
        ]);
        DB::table('question')->insert([
            'issue_id'      => 1,
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s'),
            'sort_order'    => 1,
            'question_type' => 'single_choice',
            'question'      => 'When should they have to get a warrant?'
        ]);
        DB::table('question')->insert([
            'issue_id'      => 1,
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s'),
            'sort_order'    => 2,
            'question_type' => 'essay',
            'question'      => 'How do you feel about government surveilance in regards to protecting it\'s citizens?'
        ]);
        
        DB::table('question')->insert([
            'issue_id'      => 2,
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s'),
            'sort_order'    => 0,
            'question_type' => 'single_choice',
            'question'      => 'Should armed citizens be allowed to police the border?'
        ]);
        DB::table('question')->insert([
            'issue_id'      => 2,
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s'),
            'sort_order'    => 1,
            'question_type' => 'single_choice',
            'question'      => 'Have you ever walked the border with Mexico?'
        ]);
        DB::table('question')->insert([
            'issue_id'      => 2,
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s'),
            'sort_order'    => 2,
            'question_type' => 'multiple_choice',
            'question'      => 'How can the government improve protecting the border?'
        ]);
    }
}
