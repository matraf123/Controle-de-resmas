<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Solicitacao;
use App\Models\setores;
use App\Models\Impressoes;




class historico_impressaoController extends Controller
{

  public function show(Request $request, Solicitacao $solicitacao)
    {

    $impressoes = Impressoes::orderby('id')->get();

    $setores = setores::orderby('id')->get();

    $impressoes = Impressoes::with('setores')->get();
    $search = $request->input('id_setor');

    $setores = setores::orderby('id')->get();

    // soma das impressões
    $quant_impressoes = Impressoes::sum('quant_impressoes');
    $id = Impressoes::count('id');

    if(!empty($search)){
      $impressoes = Impressoes::where('id_setor', '=',  $search)->paginate(10)->withQueryString();
    }
    else{
      $impressoes = Impressoes::with('setores')->paginate(10);
    }
    return view('historico-impressao',[    //colocar rota certa
        'impressoes' => $impressoes,
        'quant_impressoes' => $quant_impressoes,
        'id' => $id,
        'setores' => $setores ,

]);


  }
}

