<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditAnimalRequest;
use App\Http\Requests\StoreAnimalRequest;
use App\Models\Animal;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animal = Animal::all();
        return view("pages.index", compact('animal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalRequest $request)
    {
        // Validated significa convalida con le cose che già hai
        $data = $request->validated();

        $newAnimal = new Animal();
        $newAnimal->name = $data['name'];
        $newAnimal->description = $data['description'];
        $newAnimal->species = $data['species'];
        $newAnimal->image = $data['image'];
        $newAnimal->save();

        return redirect()->route('animal.show', $newAnimal->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return view('pages.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('pages.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */

    // Prendo i dati della richiesta, quindi chiave valore.
    public function update(EditAnimalRequest $request, Animal $animal)
    {
        //
        $data = $request->validated();

        $animal->name = $data['name'];
        $animal->description = $data['description'];
        $animal->species = $data['species'];
        $animal->image = $data['image'];
        $animal->update();

        // Se avessi le fillable potrei fare così
        // $pokemon->update($data);

        return redirect()->route('animal.show', $animal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        //
        $animal->delete();

        return redirect()->route('animal.index')->with('message', $animal->name . " eliminato correttamente!");
    }
}
