<?php

namespace App\Http\Controllers;

use App\Models\demStage;
use Illuminate\Http\Request;

class demStageController extends Controller
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
        return view('demandeStage');
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
            'Filière'=> 'required', 
            'Période'=> 'required', 
            'Email'=> 'required', 
            'Téléphone'=> 'required', 
 
    
            
        ]);

        demStage::create($request->all());
        return redirect('demandeStage')->with('success','Nous avons bien reçu votre demande.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\demStage  $demStage
     * @return \Illuminate\Http\Response
     */
    public function show(demStage $demStage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\demStage  $demStage
     * @return \Illuminate\Http\Response
     */
    public function edit(demStage $demStage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\demStage  $demStage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, demStage $demStage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\demStage  $demStage
     * @return \Illuminate\Http\Response
     */
    public function destroy(demStage $demStage)
    {
        //
    }
}
