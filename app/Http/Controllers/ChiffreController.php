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
     * @param  \App\Models\Chiffre  $chiffre
     * @return \Illuminate\Http\Response
     */
    public function show(Chiffre $chiffre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chiffre  $chiffre
     * @return \Illuminate\Http\Response
     */
    public function edit(Chiffre $chiffre)
    {
        //
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
        //
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
