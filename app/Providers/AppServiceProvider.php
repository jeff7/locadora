<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\MarcaRepository;
use App\Repositories\ModeloRepository;
use App\Repositories\LocacaoRepository;
use App\Repositories\ClienteRepository;
use App\Repositories\CarroRepository;
use App\Models\Marca;
use App\Models\Carro;
use App\Models\Locacao;
use App\Models\Modelo;
use App\Models\Cliente;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(MarcaRepository::class, function ($app) {
            return new MarcaRepository(new Marca());
        });
        
        $this->app->bind(CarroRepository::class, function ($app) {
            return new CarroRepository(new Carro());
        });
        
        $this->app->bind(LocacaoRepository::class, function ($app) {
            return new LocacaoRepository(new Locacao());
        });
        
        $this->app->bind(ModeloRepository::class, function ($app) {
            return new ModeloRepository(new Modelo());
        });
        
        $this->app->bind(ClienteRepository::class, function ($app) {
            return new ClienteRepository(new Cliente());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
