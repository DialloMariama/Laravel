<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index(){
        return view('projet.index');
    }
    public function liste(){
        $projet = Projet::all();
        return view('projet.liste',compact('projet'));
    }
    public function vueDetail($id){
        $projet = Projet::find($id);
        return view('projet.detail',compact('projet'));
    }

    public function getProjet($id)
    {
        $id = Projet::find($id);
        return redirect()->route('details',$id);
    }

    public function store(Request $request) 
    
    {
        
        $projet = new Projet();
        
        $projet->nom = $request->nom;
        $projet->dateD = $request->dateD;
        $projet->dateF = $request->dateF;
        $projet->description = $request->description;
        
        $projet->save();
         
        
        return redirect()->route('projet.index')->with('success','projet enregistré avec success');
    }
}
