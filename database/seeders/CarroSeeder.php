<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Carro;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Carro::create([
            'modelo_id' => 1,
            'placa' => 'PUK-001',
            'disponivel' => true,
            'km' => 0,
        ]);
        
        Carro::create([
            'modelo_id' => 2,
            'placa' => 'PUK-002',
            'disponivel' => true,
            'km' => 0,
        ]);
        
        Carro::create([
            'modelo_id' => 3,
            'placa' => 'PUK-003',
            'disponivel' => true,
            'km' => 0,
        ]);
        
        Carro::create([
            'modelo_id' => 4,
            'placa' => 'PUK-004',
            'disponivel' => true,
            'km' => 0,
        ]);
        
        Carro::create([
            'modelo_id' => 5,
            'placa' => 'PUK-005',
            'disponivel' => true,
            'km' => 0,
        ]);
        
        Carro::create([
            'modelo_id' => 6,
            'placa' => 'PUK-006',
            'disponivel' => true,
            'km' => 0,
        ]);
        
        Carro::create([
            'modelo_id' => 7,
            'placa' => 'PUK-007',
            'disponivel' => true,
            'km' => 0,
        ]);
        
        Carro::create([
            'modelo_id' => 8,
            'placa' => 'PUK-008',
            'disponivel' => true,
            'km' => 0,
        ]);
        
        Carro::create([
            'modelo_id' => 9,
            'placa' => 'PUK-009',
            'disponivel' => true,
            'km' => 0,
        ]);
        
        Carro::create([
            'modelo_id' => 10,
            'placa' => 'PUK-010',
            'disponivel' => true,
            'km' => 0,
        ]);
        
        Carro::create([
            'modelo_id' => 11,
            'placa' => 'PUK-011',
            'disponivel' => true,
            'km' => 0,
        ]);
        
        Carro::create([
            'modelo_id' => 12,
            'placa' => 'PUK-012',
            'disponivel' => true,
            'km' => 0,
        ]);
    }
}
