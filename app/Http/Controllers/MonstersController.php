<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monster;
use App\Models\Rarety;
use App\Models\Type;
use Illuminate\Support\Facades\Log;

class MonstersController extends Controller
{
    // FONCTIONS DE BASE
    public function index()
    {
        $monsters = Monster::all();
        return view('monsters.index', compact('monsters'));
    }

    public function show(int $id)
    {
        $monster = Monster::find($id);
        return view('monsters.show', compact('monster'));
    }

    // CREER ET INSERER
    public function create()
    {
        $rareties = Rarety::all();
        $types = Type::all();
        return view('monsters.create', compact('rareties', 'types'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'pv' => 'required|integer|min:0',
            'attack' => 'required|integer|min:0',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string|max:1000',
            'defense' => 'required|integer|min:0',
            'rarety_id' => 'required|exists:rareties,id',
            'type_id' => 'required|exists:monster_types,id',
        ]);

        Monster::create($data);
        return redirect()->route('pages.home')->with('status', "Monstre ajouté avec succès");
    }

    // SUPPRIMER
    public function destroy(Monster $monster)
    {
        $monster->delete();
        return redirect()->route('pages.home')->with('status', 'Monstre supprimé avec succès');
    }

    // MODIFIER
    public function edit(Monster $monster)
    {
        $rareties = Rarety::all();
        $types = Type::all();
        return view('monsters.edit', compact('monster', 'rareties', 'types'));
    }

    public function update(Request $request, Monster $monster)
    {
        Log::info('Début de la méthode update', ['request' => $request->all()]);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'pv' => 'required|integer|min:0',
            'attack' => 'required|integer|min:0',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string|max:1000',
            'defense' => 'required|integer|min:0',
            'rarety_id' => 'required|exists:rareties,id',
            'type_id' => 'required|exists:monster_types,id',
        ]);
        Log::info('Validation réussie', ['data' => $data]);

        $monster->update($data);
        Log::info('Monstre mis à jour avec succès', ['monster' => $monster]);

        return redirect()->route('pages.home')->with('status', "Monstre mis à jour avec succès");
    }
}
