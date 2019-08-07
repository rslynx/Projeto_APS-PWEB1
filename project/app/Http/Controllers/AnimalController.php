<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animal = Animal::all();
        return view('animal.index', compact('animal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('animal.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'especie' => 'required|max:255',
            'raca' => 'required|max:255',
            'corDaPelagem' => 'required|max:255',
            'idade' => 'required|max:255',
            'porteFisico' => 'required|max:255',
            'comportamento' => 'required|max:10',
            'vacinado' => 'required|max:255'
        ]);
        // dd($validatedData);
        Animal::create($validatedData);
        return redirect(route('animal.index'))->with('success', 'Alumnus is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        $animal = Animal::findOrFail($animal->id);
        return view('animal.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
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
        Animal::whereId($animal->id)->update($validatedData);
        return redirect(route('animal.index'))->with('success', 'Alumnus is successfully saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal = Animal::findOrFail($animal->id);
        $animal->delete();
        return redirect(route('animal.index'))->with('success', 'Animal is successfully deleted');
    }
}
