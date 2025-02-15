<?php

namespace App\Http\Controllers;

use App\Models\addComputer;
use Illuminate\Http\Request;


class AddComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = AddComputer::all(); // Récupérer tous les ordinateurs
        return view('view_computer', compact('computers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_computer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marque' => 'required|string|max:255',
            'modele' => 'required|string|max:255',
            'ram' => 'required|string|min:1',
            'capacite_stockage' => 'required|integer|min:1',
            'processeur' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Gestion de l'upload de la photo
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('computers', 'public');
        } else {
            $photoPath = null;
        }
   
        // Sauvegarde dans la base de données
        AddComputer::create([
            'marque' => $request->marque,
            'modele' => $request->modele,
            'processeur' => $request->processeur,
            'cpu' => $request->cpu,
            'core' => $request->core,
            'ram' => $request->ram,
            'type_stockage' => $request->type_stockage,
            'capacite_stockage' => $request->capacite_stockage,
            'taille_ecran' => $request->taille_ecran,
            'clavier' => $request->clavier,
            'carte_graphique' => $request->carte_graphique,
            'memoire_video' => $request->memoire_video,
            'ecran_tactile' => $request->ecran_tactile ? 1 : 0,
            'generation' => $request->generation,
            'autonomie' => $request->autonomie,  
            'prix' => $request->prix,
            'photo' => $photoPath,
        ]);
        
        return redirect()->route('add_computer')->with('success', 'Ordinateur enregistré avec succès !');
    }


    /**
     * Display the specified resource.
     */
    public function show(addComputer $addComputer)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(addComputer $addComputer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'marque' => 'required|string|max:255',
            'modele' => 'required|string|max:255',
            'prix' => 'required|numeric',
        ]);
    
        $computer = AddComputer::findOrFail($id);
        $computer->update($request->all());
    
        return redirect()->route('view_computer')->with('success', 'Ordinateur mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //

    $computer = AddComputer::findOrFail($id);
    $computer->delete();

    return redirect()->route('view_computer')->with('success', 'Ordinateur supprimé avec succès');
    }
}
