<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Faker\Provider\ar_JO\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnes = Personne::all();
        return view('backoffice.personne.all', compact('personnes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.personne.create");
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
            "nom" => "required",
            "prenom" => "required",
            "photo" => "required",
            "profession" => "required"
        ]);
        $personne = new Personne();

        $personne->nom = $request->nom;
        $personne->prenom = $request->prenom;
        $personne->photo = $request->file("photo")->hashName();
        $personne->profession = $request->profession;

        $personne->save();
        $request->file("photo")->storePublicly('img/testimonials', "public");

        return redirect()->route('personne.index')->with("message", "Vous avez crée une nouvelle personne avec succès!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function show(Personne $personne)
    {
        return view("backoffice.personne.show", compact("personne"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function edit(Personne $personne)
    {
        return view("backoffice.personne.edit", compact("personne"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personne $personne)
    {
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "photo" => "required",
            "profession" => "required"
        ]);
        Storage::disk("public")->delete("img/testimonials" . $personne->photo);
        $personne->nom = $request->nom;
        $personne->prenom = $request->prenom;
        $personne->photo = $request->file("photo")->hashName();
        $personne->profession = $request->profession;

        $personne->save();
        $request->file("photo")->storePublicly("img/testimonials", "public");

        return redirect()->route("personne.index")->with("message", "Vous avez modifié une personne avec succès!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personne $personne)
    {
        Storage::disk("public")->delete("img/testimonials" . $personne->photo);
        $personne->delete();
    }

    public function download($id)
    {
        $personne = Personne::find($id);

        return Storage::disk('public')->download('img/testimonials/' . $personne->photo);
    }
}
