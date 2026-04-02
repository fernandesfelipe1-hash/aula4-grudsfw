<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Carro::create([
            'cor' => 'Vermelho',
            'marca' => 'Honda',
            'modelo' => 'F1',
            'ano' => 2000,
            'teto_solar' => false,
            'fabricacao' => '2000-02-02',
        ]);

        // Carro::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
