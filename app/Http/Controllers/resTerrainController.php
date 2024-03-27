<?php

namespace App\Http\Controllers;

use App\Models\resTerrain;
use Illuminate\Http\Request;

class resTerrainController extends Controller
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
        return view('reservationTerrain');
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
            'Date'=> 'required', 
            'Horaires'=> 'required',
            
        ]);

        resTerrain::create($request->all());
        return redirect('reservationTerrain')->with('success','Nous avons bien reçu votre demande.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resTerrain  $resTerrain
     * @return \Illuminate\Http\Response
     */
    public function show(resTerrain $resTerrain)
    {
        //
        return view('show',compact('resTerrain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resTerrain  $resTerrain
     * @return \Illuminate\Http\Response
     */
    public function edit(resTerrain $resTerrain)
    {
        //
        return view('edit',compact('resTerrain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\resTerrain  $resTerrain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, resTerrain $resTerrain)
    {
        //
        $request->validate([
            'Nom_Representant'=> 'required',
            'CNE_Representant'=> 'required',
            'Niveau_Representant'=> 'required', 
            'Téléphone_Representant'=> 'required', 
            'Email_Representant'=> 'required', 
            'Date'=> 'required', 
            'Horaires'=> 'required',
        ]);
        $resTerrain->update($request->all());
        return redirect()->route('resTerrains.index')->with('success','Request updated successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resTerrain  $resTerrain
     * @return \Illuminate\Http\Response
     */
    public function destroy(resTerrain $resTerrain)
    {
        //
        $resTerrain->delete();
        return redirect()->route('resTerrains.index')->with('success','Request deleted successfully');
   
    }
}
