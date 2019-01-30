<?php

namespace App\Http\Controllers;

use App\Gasto;
use Illuminate\Http\Request;

class Gastos extends Controller
{

    public function index()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type");
        $todosGastos = Gasto::all(array(
            'id',
            'nome',
            'descricao',
            'data_hora',
            'valor',
            'tag',
        ));
        return response()->json($todosGastos);
    }

    public function getGasto($id){
        $gasto = Gasto::
        where('id', $id)->
        get(array(
            'id',
            'nome',
            'descricao',
            'data_hora',
            'valor',
            'tag',
        ));
        return response()->json($gasto);
    }

    public function createGasto(Request $request){
        $dados = $request->all();
        $dados['data_hora'] = date('Y-m-d H:i:s');
        try{
            Gasto::create($dados);
            return response()->json(['status' => 'Dados salvo com sucesso!']);
        } catch (\Exception $e){
            return response()->json(['status' => 'Problemas ao gravar no banco de dados!']);
        }
    }

}
