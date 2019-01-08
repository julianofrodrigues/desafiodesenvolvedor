<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;


class ClienteController extends Controller
{
    public function index() {
        $clientes = Cliente::all();
        return view('list-clientes',[
            'clientes'=>$clientes
        ]);
    }

    public function create() {
        return view('include-cliente');
    }

    public function store(Request $request) {
        $client = new Cliente;
        $client->name = $request->name;
        $client->dtnasc = $request->dtnasc;
        $client->sexo = $request->sexo;
        $client->dtcad = $request->dtcad;
        $client->save();
        return redirect()->route('client.index')->with('message', 'Cliente cadastrado com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $client = Cliente::findOrFail($id);
        return view('alter-cliente', [
            'client'=>$client
        ]);
    }

    public function update(Request $request, $id) {
        $client = Cliente::findOrFail($id); 
        $client->name = $request->name;
        $client->dtnasc = $request->dtnasc;
        $client->sexo = $request->sexo;
        $client->save();
        return redirect()->route('client.index')->with('message', 'Cliente alterado com sucesso!');
    }

    public function destroy($id) {
        $client = Cliente::findOrFail($id);
        $client->delete();
        return redirect()->route('client.index')->with('message', 'Cliente excluído com sucesso!');
    }
}
