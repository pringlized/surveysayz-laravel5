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
            'user_status'   => 'active',
            'username'      => 'allKindsOfIssues',
            'email'         => 'mmaser@fakedomain.com',
            'role'          => 'admin',
            'password'      => bcrypt('somesecret'),
            'first_name'    => 'Mike',
            'last_name'     => 'Maser',
            'location'      => 'San Francisco, CA',
            'last_login'    => date('Y-m-d H:m:s'),
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s')
        ]);  
        DB::table('users')->insert([
            'user_status'   => 'active',
            'username'      => 'csFlood',
            'email'         => 'pflood@fakedomain.com',
            'role'          => 'user',
            'password'      => bcrypt('somesecret'),
            'first_name'    => 'Peter',
            'last_name'     => 'Flood',
            'location'      => 'Mesa, CA',
            'last_login'    => date('Y-m-d H:m:s'),
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s')
        ]);
        DB::table('users')->insert([
            'user_status'   => 'active',
            'username'      => 'CelticConnor',
            'email'         => 'sConnor@fakedomain.com',
            'role'          => 'contributor',
            'password'      => bcrypt('somesecret'),
            'first_name'    => 'Sarah',
            'last_name'     => 'Connor',
            'location'      => 'Madison, WI',
            'last_login'    => date('Y-m-d H:m:s'),
            'created_at'    => date('Y-m-d H:m:s'),
            'updated_at'    => date('Y-m-d H:m:s')
        ]); 
    }
}
