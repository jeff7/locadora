<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Marca::create([
            'nome' => 'Fiat',
            'imagem'=> 'Imagem teste de Fiat'
        ]);
        
        Marca::create([
            'nome' => 'Ford',
            'imagem'=> 'Imagem teste de Ford'
        ]);
        
        Marca::create([
            'nome' => 'Toyota',
            'imagem'=> 'Imagem teste de Toyota'
        ]);
        
        Marca::create([
            'nome' => 'Volkswagen',
            'imagem'=> 'Imagem teste de Volkswagen'
        ]);
        
        Marca::create([
            'nome' => 'Hyundai',
            'imagem'=> 'Imagem teste de Hyundai'
        ]);

        Marca::create([
            'nome' => 'Chevrolet',
            'imagem'=> 'Imagem teste de Chevrolet'
        ]);
    }
}
