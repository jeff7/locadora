<?php

namespace App\Http\Controllers;

use App\Repositories\ModeloRepository;
use App\Http\Requests\StoreModeloRequest;
use App\Http\Requests\UpdateModeloRequest;

class ModeloController extends Controller
{
    public function __construct(ModeloRepository $modeloRepository) {
        $this->modeloRepository = $modeloRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $modelo = $this->modeloRepository->with(['marca']);
        return response()->json($modelo, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModeloRequest $request)
    {
        //
        $modeloValidated = $request->validated();
        $modelo = $this->modeloRepository->create($modeloValidated);
        return response()->json($modelo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $modelo = $this->modeloRepository->find($id, ['marca']);
        return response()->json($modelo, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModeloRequest $request, $id)
    {
        //
        $modeloValidated = $request->validated();
        $modelo = $this->modeloRepository->update($id, $modeloValidated);
        return response()->json($modelo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $modelo = $this->modeloRepository->delete($id);
        return response()->json([ 'message' => 'deletado' ], 200);
    }
}
