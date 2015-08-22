<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        DB::table('users')->insert([
            'username'      => 'allKindsOfIssues',
            'email'         => 'hfelter@fakedomain.com',
            'role'          => 'admin',
            'password'      => bcrypt('somesecret'),
            'first_name'    => 'Harvey',
            'last_name'     => 'Felter',
            'location'      => 'San Francisco, CA',
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s')
        ]);  
        DB::table('users')->insert([
            'username'      => 'csFlood',
            'email'         => 'petere@fakedomain.com',
            'role'          => 'editor',
            'password'      => bcrypt('somesecret'),
            'first_name'    => 'Peter',
            'last_name'     => 'Ennis',
            'location'      => 'Mesa, CA',
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s')
        ]);   
    }
}
