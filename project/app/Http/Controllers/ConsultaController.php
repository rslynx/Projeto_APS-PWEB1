<?php

namespace App\Http\Controllers;

use App\Consulta;
use App\Pessoa;
use Illuminate\Http\Request;
use PessoaSeeder;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consulta = Consulta::all();
        return view('consulta.index', compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {   
        $pessoa = Pessoa::findOrFail($id);
        return view('consulta.create' , compact('pessoa'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {   
        //dd($request);
        $pessoa = Pessoa::findOrFail($id);
        $validatedData = $request->validate([
            'data' => 'required|max:255',
            'turno' => 'required|max:255'
        ]);
        //dd($validatedData);
            //dd ($pessoa->animais);
        //array_push($pessoa->animais, $validatedData);
        $consulta = new Consulta;
        
        //$consulta = $validatedData;
        $consulta->pessoa_id = $id;
        $consulta->data = $request->input('data');
        $consulta->turno = $request->input('turno');
        $consulta->save();
        // dd($consulta);
        $pessoa->animais->push($consulta);
        //dd ($pessoa->animais);
        $pessoa->save();
        //Pessoa::whereId($pessoa->id)->update($validatedData);
        return redirect(route('pessoa.index'))->with('success', 'Alumnus is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function show(Consulta $consulta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function edit(Consulta $consulta)
    {
        $consulta = consulta::findOrFail($consulta->id);
        return view('consulta.edit', compact('consulta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consulta $consulta)
    {
        $validatedData = $request->validate([
            'nome' => 'max:255',
            'especie' => 'max:255',
            'raca' => 'max:255',
            'corDaPelagem' => 'max:255',
            'idade' => 'max:255',
            'porteFisico' => 'max:255',
            'comportamento' => 'max:10'    ,
            'vacinado' => 'max:255'
        ]);
        consulta::whereId($consulta->id)->update($validatedData);
        return redirect(route('consulta.index'))->with('success', 'Alumnus is successfully saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\consulta  $consulta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consulta $consulta)
    {
        $consulta = consulta::findOrFail($consulta->id);
        $consulta->delete();
        return redirect(route('consulta.index'))->with('success', 'consulta is successfully deleted');
    }
}
