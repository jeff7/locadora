<?php

namespace App\Http\Controllers;

use App\Repositories\MarcaRepository;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use App\Http\Requests\StoreMarcaRequest;
use App\Http\Requests\UpdateMarcaRequest;


class MarcaController extends Controller
{
    public function __construct(MarcaRepository $marcaRepository)
    {
        $this->marcaRepository = $marcaRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $marcas = $this->marcaRepository->with(['modelos']);
        return response()->json($marcas, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMarcaRequest $request)
    {
        //
        $validateMarca = $request->validated();
        $marca = $this->marcaRepository->create($validateMarca);
        return response()->json($marca, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $marca = $this->marcaRepository->find($id, ['modelos']);
        if (!$marca) return response()->json(['erro' => 'not found'], 404);
        return response()->json($marca, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMarcaRequest $request, $id)
    {
        //
        $validateMarca = $request->validated();
        $marca = $this->marcaRepository->update($id, $validateMarca);
        return response()->json($marca, 200); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $marca = $this->marcaRepository->delete($id);
        return response()->json([ 'message' => 'deletado' ], 200);
    }
}
