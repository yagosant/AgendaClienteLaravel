<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests;


class ClienteController extends Controller
{
    public function __construct()
    {
        //verifica se o usuário está logado para acessar esse controller
        $this->middleware('auth');
    }

    //
    public function index(){

        //retorna de 10 em 10 registro
        $clientes = Cliente::paginate(10);

        //dd($clientes);
        return view('cliente.index',compact('clientes'));
    } 

    public function adicionar()
    {
        return view('cliente.adicionar');
    }

    public function salvar(\App\Http\Requests\ClienteRequest $request)
    {
        Cliente::create($request->all());
        
        //codigo de mensagem
        \Session::flash('flash_msg',[
            'class' => "alert-success",
            'msg' => "Usuário adicionado com sucesso!"
        ]);
        return redirect()->route('cliente.adicionar');
            
    }

    public function editar($id)
    {
        $cliente = Cliente::find($id);

        if(!$cliente){
            \Session::flash('mensagem',[
                'msg' => 'Cliente não encontrado',
                'class' => 'danger white-text'
                ]);
     
        }else{
            return view('cliente.editar',compact('cliente'));
        }
        return view('cliente.editar',compact('cliente'));
    }

    public function atualizar(\App\Http\Requests\ClienteRequest $request, $id){


        Cliente::find($id)->update($request->all());
        /*
        $dados = $request->all();
         $cliente->nome = $dados['nome'];
        $cliente->email = $dados['email'];
        $cliente->endereco = $dados['endereco'];
        $cliente->update();
 */
        
        \Session::flash('mensagem',[
            'msg' => 'Cliente alterado com sucesso',
            'class' => 'green white-text'
            ]);
 
        return redirect()->route('cliente.index');
    }

    public function deletar($id)
    {
        $cliente = Cliente::find($id);
        
        if(!$cliente->deletarTelefone()){

            return redirect()->route('cliente.index');
        }
           
        $cliente->delete();

        return redirect()->route('cliente.index',compact('cliente'));
    }

    public function detalhe($id){

        $cliente = Cliente::find($id);
        return view('cliente.detalhe', compact('cliente'));
    }
}
