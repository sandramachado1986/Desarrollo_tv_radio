<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\modals;



class modalsController extends Controller
{
    public function index()
    {
        $modals = modals::all();
        return view('modals.index', compact('modals'));
    }


    public function store(Request $request)
{
    // Valida y almacena la nueva migración
}

public function show($id)
{
    $modals = modals::find($id);
    return view('modals.show', compact('modals'));
}

public function edit($id)
{
    $modals = modals::find($id);
    return view('modals.edit', compact('modals'));
}

public function update(Request $request, $id)
{
    // Valida y actualiza la migración existente
}

public function destroy($id)
{
    // Elimina la migración
}
}