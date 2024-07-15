<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarroRequest;
use App\Http\Requests\UpdateCarroRequest;
use App\Repositories\CarroRepository;

class CarroController extends Controller
{
    public function __construct(CarroRepository $carroRepository) {
        $this->carroRepository = $carroRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $carros = $this->carroRepository->all();
        return response()->json($carros, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarroRequest $request)
    {
        //
        $carroValidated = $request->validated();
        $carro = $this->carroRepository->create($carroValidated);
        return response()->json($carro, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $carro = $this->carroRepository->find($id);
        return response()->json($carro, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarroRequest  $request
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarroRequest $request, $id)
    {
        //
        $carroValidated = $request->validated();
        $carro = $this->carroRepository->update($id, $carroValidated);
        return response()->json($carro, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Verificar as constraints antes de apagar
        $carro = $this->carroRepository->delete($id);
        return response()->json([ 'message' => 'deletado' ] , 200);
    }
}
