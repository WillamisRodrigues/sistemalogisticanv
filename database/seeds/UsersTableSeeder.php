<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Willamis Rodrigues',
            'email'     => 'wrodrigues153@gmail.com',
            'nivel'     => 1,
            'empresa_id'     => 1,
            'password'  => bcrypt('password'),
        ]);
    }
}
