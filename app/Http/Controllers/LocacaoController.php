<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocacaoRequest;
use App\Http\Requests\UpdateLocacaoRequest;
use App\Repositories\LocacaoRepository;

class LocacaoController extends Controller
{
    public function __construct(LocacaoRepository $locacaoRepository) {
        $this->locacaoRepository = $locacaoRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $locacao = $this->locacaoRepository->with(['cliente', 'carro']);
        return response()->json($locacao, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLocacaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocacaoRequest $request)
    {
        //
        $locacaoValidated = $request->validated();
        $locacao = $this->locacaoRepository->create($locacaoValidated);
        return response()->json($locacao, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Locacao  $locacao
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $locacao = $this->locacaoRepository->find($id, ['cliente', 'carro']);
        return response()->json($locacao, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLocacaoRequest  $request
     * @param  \App\Models\Locacao  $locacao
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocacaoRequest $request, $id)
    {
        //
        $locacaoValidated = $request->validated();
        $locacao = $this->locacaoRepository->update($id, $locacaoValidated);
        return response()->json($locacao, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Locacao  $locacao
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $locacao = $this->locacaoRepository->delete($id);
        return response()->json([ 'message' => 'deletado' ], 200);
    }
}
