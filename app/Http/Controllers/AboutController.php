<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('backoffice.about.all', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('backoffice.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            "titre" => "required",
            "description" => "required",
            "paragraphe1" => "required",
            "paragraphe2" => "required",
            "paragraphe3" => "required",
            "image" => "required"
        ]);
        Storage::disk("public")->delete("img/" . $about->image);
        $about->titre = $request->titre;
        $about->description = $request->description;
        $about->paragraphe1 = $request->paragraphe1;
        $about->paragraphe2 = $request->paragraphe2;
        $about->paragraphe3 = $request->paragraphe3;
        $about->image = $request->file("image")->hashName();

        $about->save();
        $request->file("image")->storePublicly("img", "public");

        return redirect()->route("about.index")->with("message", "Vous avez modifié une personne avec succès!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }

    public function download($id)
    {
        $about = About::find($id);

        return Storage::disk('public')->download('img/' . $about->image);
    }
}
