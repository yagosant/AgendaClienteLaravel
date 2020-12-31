<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Telefone;
use App\Cliente;
use App\Http\Requests;


class TelefoneController extends Controller
{
    
    public function __construct()
    {
        //verifica se o usuário está logado para acessar esse controller
        $this->middleware('auth');
    }

    public function adicionar($id)
    {
        $cliente = Cliente::find($id);
       
        return view('telefone.adicionar',compact('cliente'));
    }

    public function salvar(\App\Http\Requests\TelefoneRequest $request,$id)
    {
        $cliente = Cliente::find($id);
        $telefone = new Telefone();
        $telefone->titulo = $request->input('titulo');
        $telefone->telefone = $request->input('telefone');
       
        //usando o metodo criado na model cliente
        Cliente::find($id)->addTelefone($telefone);

        //codigo de mensagem
        \Session::flash('flash_msg',[
            'class' => "alert-success",
            'msg' => "Telefone adicionado com sucesso!"
        ]);
        return redirect()->route('cliente.detalhe',$id);
           
    }

    public function editar($id)
    {
        $telefone = Telefone::find($id);

        return view('telefone.editar',compact('telefone'));
    }

    public function atualizar(\App\Http\Requests\TelefoneRequest $request, $id){

        $telefone = Telefone::find($id);
       $telefone->update($request->all());

        
        return redirect()->route('cliente.detalhe',$telefone->cliente->id);
    }

    public function deletar($id)
    {
        $telefone = Telefone::find($id);
        $telefone->delete();

        return redirect()->route('cliente.detalhe',$telefone->cliente->id);
    }
}