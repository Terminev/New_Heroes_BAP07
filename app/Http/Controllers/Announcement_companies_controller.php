<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Announcement_companies;

class Announcement_companies_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Annonces/AnnonceCompagny', [
            'annonces'=>Announcement_companies::all(),
            'favories'=>Favorite::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Annonces/AnnonceCompagnyCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Announcement_companies::create($request[0]);

        return redirect()->route("annonce_compagnie.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $annonces = Announcement_companies::findOrFail($id);
        return Inertia::render('Annonces/AnnonceCompagnyOpen', [
            'annonces'=>$annonces
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $annonce_edit = Announcement_companies::findOrFail($id);
        return Inertia::render('Annonces/AnnonceEdit', [
            'annonce'=>$annonce_edit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        error_log('$request');
        error_log($request);
        error_log('$id');
        error_log($id);
        $annonce_edit = Announcement_companies::findOrFail($id);
        error_log($annonce_edit);
        $annonce_edit->update($request[0]);
        return redirect()->route('annonce_compagnie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Log::info($id);
        $annonce = Announcement_companies::find($id);
        $annonce->delete();

        return redirect()->route("annonce_compagnie.index");
    }
}
