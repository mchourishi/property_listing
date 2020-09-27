<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'role_id'       => 1,
                'name'          => 'Admin',
                'email'         => 'admin@admin.com',
                'password'      => bcrypt('admin'),
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'role_id'       => 2,
                'name'          => 'User',
                'email'         => 'user@user.com',
                'password'      => bcrypt('user'),
                'created_at'    => date("Y-m-d H:i:s")
            ],
        ]);


        DB::table('roles')->insert([
            [
                'name'          => 'Admin',
                'slug'          => 'admin',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'name'          => 'User',
                'slug'          => 'user',
                'created_at'    => date("Y-m-d H:i:s")
            ]
        ]);

    }
}
