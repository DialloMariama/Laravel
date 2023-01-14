<?php

namespace App\Http\Controllers;
use App\Models\Phase;
use App\Models\Projet;
use Illuminate\Http\Request;

class PhaseController extends Controller
{
    public function index(){
        $phase = Phase::all();
        return view('phase.index',compact('phase'));
    }
    

    public function store(Request $request)
    {
        //
        $phase = new Phase;
        
        $phase->nom = $request->nom;
        $phase->duree = $request->duree;
        $phase->propriete = $request->propriete;
        
        $phase->save();
         
        
        return redirect()->route('phase.index')->with('success','phase enregistré avec success');
    }
   
}
