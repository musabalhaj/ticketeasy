<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'System Admin',
            'email' => 'musab1marly@gmail.com',
            'password' => bcrypt('1421'),
            'role'=>'1'

        ]);
        DB::table('users')->insert([
            'name' => 'Orgnizer',
            'email' => 'Orgnizer@gmail.com',
            'password' => bcrypt('1421'),
            'role'=>'2'

        ]);
    }
}
