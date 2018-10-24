<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;


use App\Http\Requests;
 use App\Http\Controllers\Controller;
use Redirect;
class ClienteController extends Controller
{
    
  public function index()
	{
		$clientes = Cliente::get();
      return view('clientes.lista',['clientes' => $clientes]);
	}

 public function novo()
	{
      return view('clientes.formulario');
	}


 public function Salvar(Request $request)
	{
	$cliente = new cliente();	
                $cliente = $cliente->create($request->all());
    
    
	 \Session::flash('mensagem_sucesso',  'Cliente cadastrado com sucesso');

return Redirect::to('clientes/novo');

	}


public function editar($id){

$cliente = Cliente::findOrFail($id);



return view('clientes.formulario', ['cliente' => $cliente]);


}


public function atualizar($id , Request $request){

$cliente = Cliente::findOrFail($id);

 $cliente->update($request->all());

  \Session::flash('mensagem_sucesso',  'Cliente atualisado com sucesso');
 return Redirect::to('clientes/'.$cliente->id.'/editar');
}



public function deletar($id){
    
    $cliente = cliente::findOrFail($id);
    $cliente->delete();
    
 \Session::flash('mensagem_sucesso',  'Cliente deletado com sucesso');
    
    return Redirect::to('clientes');
    
    
}

}


