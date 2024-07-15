<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modelo;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Modelo::create([
            'marca_id' => 1,
            'nome' => 'Palio',
            'imagem' => 'Imagem de teste Palio',
            'numero_portas' => 4,
            'lugares' => 5,
            'air_bag' => true,
            'abs' => true,
        ]);
        
        Modelo::create([
            'marca_id' => 1,
            'nome' => 'Siena',
            'imagem' => 'Imagem de teste Siena',
            'numero_portas' => 4,
            'lugares' => 5,
            'air_bag' => true,
            'abs' => true,
        ]);    
        
        Modelo::create([
            'marca_id' => 2,
            'nome' => 'Focus',
            'imagem' => 'Imagem de teste Focus',
            'numero_portas' => 4,
            'lugares' => 5,
            'air_bag' => true,
            'abs' => true,
        ]);
        
        Modelo::create([
            'marca_id' => 2,
            'nome' => 'Ka',
            'imagem' => 'Imagem de teste Ka',
            'numero_portas' => 4,
            'lugares' => 5,
            'air_bag' => true,
            'abs' => true,
        ]); 

        Modelo::create([
            'marca_id' => 3,
            'nome' => 'Corolla',
            'imagem' => 'Imagem de teste Corolla',
            'numero_portas' => 4,
            'lugares' => 5,
            'air_bag' => true,
            'abs' => true,
        ]);
        
        Modelo::create([
            'marca_id' => 3,
            'nome' => 'sw4',
            'imagem' => 'Imagem de teste sw4',
            'numero_portas' => 4,
            'lugares' => 5,
            'air_bag' => true,
            'abs' => true,
        ]);

        Modelo::create([
            'marca_id' => 4,
            'nome' => 'T-cross',
            'imagem' => 'Imagem de teste T-cross',
            'numero_portas' => 4,
            'lugares' => 5,
            'air_bag' => true,
            'abs' => true,
        ]);
        
        Modelo::create([
            'marca_id' => 4,
            'nome' => 'Gol',
            'imagem' => 'Imagem de teste Gol',
            'numero_portas' => 4,
            'lugares' => 5,
            'air_bag' => true,
            'abs' => true,
        ]);

        Modelo::create([
            'marca_id' => 5,
            'nome' => 'Hb20',
            'imagem' => 'Imagem de teste Hb20',
            'numero_portas' => 4,
            'lugares' => 5,
            'air_bag' => true,
            'abs' => true,
        ]);
        
        Modelo::create([
            'marca_id' => 5,
            'nome' => 'Creta',
            'imagem' => 'Imagem de teste Creta',
            'numero_portas' => 4,
            'lugares' => 5,
            'air_bag' => true,
            'abs' => true,
        ]);

        Modelo::create([
            'marca_id' => 6,
            'nome' => 'Tracker',
            'imagem' => 'Imagem de teste Tracker',
            'numero_portas' => 4,
            'lugares' => 5,
            'air_bag' => true,
            'abs' => true,
        ]);
        
        Modelo::create([
            'marca_id' => 6,
            'nome' => 'Onix',
            'imagem' => 'Imagem de teste Onix',
            'numero_portas' => 4,
            'lugares' => 5,
            'air_bag' => true,
            'abs' => true,
        ]);
    }
}
