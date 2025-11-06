<?php

namespace Database\Seeders;

use App\Models\Produto;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('123456')
        ]);

         User::factory()->create([
            'name' => 'Test User 2 ',
            'email' => 'test2@example.com',
            'password' => Hash::make('123456')
        ]);

         User::factory()->create([
            'name' => 'Test User 3',
            'email' => 'test3@example.com',
            'password' => Hash::make('123456')
        ]);

         User::factory()->create([
            'name' => 'Test User 4',
            'email' => 'test4@example.com',
            'password' => Hash::make('123456')
        ]);


        Produto::create([
            'nome' => 'Tablet',
            'quantidade' => '78',
            'preco' => 'R$ 1000.00'
        ]);

        Produto::create([
            'nome' => 'Fone de ouvido',
            'quantidade' => '78',
            'preco' => 'R$ 1000.00'
        ]);

        Produto::create([
            'nome' => 'LED RGB',
            'quantidade' => '78',
            'preco' => 'R$ 1000.00'
        ]);

        

    }
}
