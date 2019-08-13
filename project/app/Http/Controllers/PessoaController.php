<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{

    public function index()
    {
        $pessoa = pessoa::all();
        return view('pessoa.index', compact('pessoa'));
    }

    public function create()
    {   
        return view('pessoa.create');
        
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'endereco' => 'required|max:255',
            'telefone' => 'required|max:255',
            'cep' => 'required|max:255',
            'cpf' => 'required|max:255',            
        ]);
        // dd($validatedData);
        Pessoa::create($validatedData);
        return redirect(route('pessoa.index'))->with('success', 'Pessoa is successfully saved');
    }

    public function show(Pessoa $pessoa)
    {
        return view('pessoa.show', compact('pessoa'));
    }


    public function edit(Pessoa $pessoa)
    {
        $pessoa = Pessoa::findOrFail($pessoa->id);
        return view('pessoa.edit', compact('pessoa'));
    }


    public function update(Request $request, Pessoa $pessoa)
    {
        $validatedData = $request->validate([
            'nome' => 'max:255',
            'endereco' => 'max:255',
            'telefone' => 'max:255',
            'cep' => 'max:255',
            'cpf' => 'max:255'
        ]);
        Pessoa::whereId($pessoa->id)->update($validatedData);
        return redirect(route('pessoa.index'))->with('success', 'Pessoa is successfully saved');
    }

    public function destroy(Pessoa $pessoa)
    {
        $pessoa = Pessoa::findOrFail($pessoa->id);
        $pessoa->delete();
        return redirect(route('pessoa.index'))->with('success', 'Pessoa is successfully deleted');
    }
}
