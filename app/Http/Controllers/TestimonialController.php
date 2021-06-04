<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('backoffice.testimonial.all', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.testimonial.create");

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
            "profession" => "required",
            "texte" => "required",
        ]);
        $personne = new Personne();

        $personne->nom = $request->nom;
        $personne->prenom = $request->prenom;
        $personne->photo = $request->file("photo")->hashName();
        $personne->profession = $request->profession;

        $personne->save();
        $request->file("photo")->storePublicly('img/testimonials', "public");

        $testimonial = new Testimonial();

        $testimonial->texte = $request->texte;
        $testimonial->personne_id = $personne->id;

        $testimonial->save();

        return redirect()->route("testimonial.index")->with("message", "Vous avez crée un nouveau testimonial et une nouvelle personne avec succès!");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view("backoffice.testimonial.show", compact("testimonial"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view("backoffice.testimonial.edit", compact("testimonial"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            "texte" => "required",
        ]);
        $testimonial->texte = $request->texte;
        $testimonial->personne_id = $testimonial->personne_id;

        $testimonial->save();

        return redirect()->route("testimonial.index")->with("message", "Vous avez crée modifié un testimonial avec succès!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->back();
    }
}
