<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["clientes"] = Cliente::all();
        return view("cliente.index", $data);;
    }
        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cliente.form");
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
        
            'nome' => '',
            'telefone' => '',
            'email' => '',
            'senha' => '',
            'idade' => '',
            'nascimento' => '',
            'genero' => '',
            'cor_favorita' => '',
            'habilidades' => '',

        ]);

        $cliente = new Cliente();
        
        $cliente->nome = $request->nome;
        $cliente->telefone = $request->telefone;
        $cliente->email = $request->email;
        $cliente->senha = $request->senha;
        $cliente->idade = $request->idade;
        $cliente->nascimento = $request->nascimento;
        $cliente->genero = $request->genero;
        $cliente->cor_favorita = $request->cor_favorita;
        $cliente->habilidades = $request->habilidades;
        $cliente->save();
        \Session::flash("flash_msg_success", "Armazenamento realizado com sucesso.");
        return redirect("/cliente");
    }
        
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        $data["cliente"] = $cliente;
        return view("cliente.form", $data);
    }
        
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
        
            'nome' => '',
            'telefone' => '',
            'email' => '',
            'senha' => '',
            'idade' => '',
            'nascimento' => '',
            'genero' => '',
            'cor_favorita' => '',
            'habilidades' => '',

        ]);

        $cliente->nome = $request->nome;
        $cliente->telefone = $request->telefone;
        $cliente->email = $request->email;
        $cliente->senha = $request->senha;
        $cliente->idade = $request->idade;
        $cliente->nascimento = $request->nascimento;
        $cliente->genero = $request->genero;
        $cliente->cor_favorita = $request->cor_favorita;
        $cliente->habilidades = $request->habilidades;
        $cliente->save();

        \Session::flash("flash_msg_success", "Edição realizada com sucesso.");
        return redirect("/cliente");
    }
        
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        \Session::flash("flash_msg_success", "Exclusão realizada com sucesso.");
        return redirect("/cliente");
    }
}
