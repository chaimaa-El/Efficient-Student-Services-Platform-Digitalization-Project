<?php

namespace App\Http\Controllers;

use App\Models\attesAbsence;
use Illuminate\Http\Request;

class attesAbsenceController extends Controller
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
        return view('attestationAbsence');
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
            'Nom_Etudiant'=> 'required',
            'Prenom_Etudiant'=> 'required',
            'CNE'=> 'required',
            'Niveau'=> 'required', 
            'Filière', 
 
 
    
            
        ]);

        attesAbsence::create($request->all());
        return redirect('attestationAbsence')->with('success','Nous avons bien reçu votre demande.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\attesAbsence  $attesAbsence
     * @return \Illuminate\Http\Response
     */
    public function show(attesAbsence $attesAbsence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\attesAbsence  $attesAbsence
     * @return \Illuminate\Http\Response
     */
    public function edit(attesAbsence $attesAbsence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\attesAbsence  $attesAbsence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, attesAbsence $attesAbsence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\attesAbsence  $attesAbsence
     * @return \Illuminate\Http\Response
     */
    public function destroy(attesAbsence $attesAbsence)
    {
        //
    }
}
