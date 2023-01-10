<?php

namespace App\Http\Controllers;

use App\Models\Impressoes;
use Illuminate\Http\Request;

class ImpressoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('cadastro_impressao');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        // $impressoes = new Impressoes();
        // $impressoes->id_setores_impressoras = $request->input('id_setores_impressoras');
        // $impressoes->quant_impressoes = $request->input('quant_impressoes');
 
        // $impressoes->save();

        Impressoes::create([
            'id_setores_impressoras' =>  1,
            'quant_impressoes' => 10000,
        ]);

        
        return ('cadastro_impressao');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_setores_impressoras' => 'required|integer',
            'quant_impressoes' => 'required|integer',
        ]);

        Impressoes::create($request->all());

        return redirect()->route('historico')->with('msg','Salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Impressoes  $impressoes
     * @return \Illuminate\Http\Response
     */
    public function show(Impressoes $impressoes)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Impressoes  $impressoes
     * @return \Illuminate\Http\Response
     */
    public function edit(Impressoes $impressoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Impressoes  $impressoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Impressoes $impressoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Impressoes  $impressoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Impressoes $impressoes)
    {
        //
    }
}
