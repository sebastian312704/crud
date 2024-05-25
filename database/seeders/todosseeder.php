<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class todosseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userAdmin=user::create([
            'name' => 'admin',
            'email' => 'admin123@gmail.com',
            'password' => hash::make('admin'),
            'tipo' => '1',
            'codigo' => 'admin'
        ]);

        $userProf=user::create([
            'name' => 'profe',
            'email' => 'profe123@gmail.com',
            'password' => hash::make('profe'),
            'tipo' => '2',
            'codigo' => 'profe'
        ]);

        $userEst=user::create([
            'name' => 'est',
            'email' => 'est123@gmail.com',
            'password' => hash::make('est'),
            'tipo' => '3',
            'codigo' => 'est'
        ]);


    }
}
