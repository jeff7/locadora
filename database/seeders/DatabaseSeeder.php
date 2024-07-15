<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Cliente::factory(20)->create();
        $this->call(MarcaSeeder::class);
        $this->call(ModeloSeeder::class);
        $this->call(CarroSeeder::class);
    }
}
