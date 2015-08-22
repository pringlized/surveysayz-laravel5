<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

//use database\seeds\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(IssueTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(AnswerTableSeeder::class);
        $this->call(DoLaterIndexTableSeeder::class);
        $this->call(FavoriteIndexTableSeeder::class);
        $this->call(ActivityTableSeeder::class);

        Model::reguard();
    }
}
