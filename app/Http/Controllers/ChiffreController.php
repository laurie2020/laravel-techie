<?php

namespace App\Http\Controllers;

use App\Models\Chiffre;
use Illuminate\Http\Request;

class ChiffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chiffres = Chiffre::all();
        return view('backoffice.chiffre.all', compact('chiffres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.chiffre.create");
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
            "nombre" => "required",
            "titre" => "required"
        ]);

        $chiffre = new Chiffre();

        $chiffre->nombre = $request->nombre;
        $chiffre->titre = $request->titre;

        $chiffre->save();

        return redirect()->route('chiffre.index')->with("message", "Vous avez créé un nouveau chiffre avec succès!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chiffre  $chiffre
     * @return \Illuminate\Http\Response
     */
    public function show(Chiffre $chiffre)
    {
        return view('backoffice.chiffre.show', compact('chiffre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chiffre  $chiffre
     * @return \Illuminate\Http\Response
     */
    public function edit(Chiffre $chiffre)
    {
        return view("backoffice.chiffre.show", compact('chiffre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chiffre  $chiffre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chiffre $chiffre)
    {
        $request->validate([
            "nombre" => "required",
            "titre" => "required"
        ]);
        $chiffre->nombre = $request->nombre;
        $chiffre->titre = $request->titre;

        $chiffre->save();

        return redirect()->route("chiffre.index")->with("message", "Vous avez modifié votre chiffre avec succès!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chiffre  $chiffre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chiffre $chiffre)
    {
        $chiffre->delete();
        return redirect()->back()->with('message', "Vous avez supprimé le chiffre avec l'id $chiffre->id");
    }
}
