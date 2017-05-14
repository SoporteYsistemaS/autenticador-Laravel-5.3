<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'admin',
        	'email' => 'admin@autenticador.com',
        	'password' => bcrypt('admin.123'),
        ]);
        

        DB::table('users')->insert([
        	'name' => 'esteban',
        	'email' => 'esteban@gmail.com',
        	'password' => bcrypt('hola.123'),
        ]);

    }
}
