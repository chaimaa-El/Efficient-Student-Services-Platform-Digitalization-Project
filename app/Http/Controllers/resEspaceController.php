<?php

namespace App\Http\Controllers;

use App\Models\resEspace;
use Illuminate\Http\Request;

class resEspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reservationEspace');
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
        $request->validate([
            'Nom_Representant'=> 'required',
            'CNE_Representant'=> 'required',
            'Niveau_Representant'=> 'required', 
            'Email_Representant'=> 'required', 
            'Téléphone_Representant'=> 'required', 
            'Event'=> 'required', 
            'Date'=> 'required', 
            'Durée'=> 'required',
            'Public'=> 'required',
            'Espace'=> 'required',
            'Equipements'=> 'required',
    
            
        ]);

        resEspace::create($request->all());
        return redirect('reservationEspace')->with('success','Nous avons bien reçu votre demande.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resEspace  $resEspace
     * @return \Illuminate\Http\Response
     */
    public function show(resEspace $resEspace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resEspace  $resEspace
     * @return \Illuminate\Http\Response
     */
    public function edit(resEspace $resEspace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\resEspace  $resEspace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, resEspace $resEspace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resEspace  $resEspace
     * @return \Illuminate\Http\Response
     */
    public function destroy(resEspace $resEspace)
    {
        //
    }
}
