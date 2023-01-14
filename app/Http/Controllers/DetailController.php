<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(){
       
        $projet = Projet::All();
        return view('projet.detail',compact('projet','id'));
    }

    public function getProjet($id)
    {
        
        $projet = Projet::find($id);
        return redirect()->route('projet.detail',$id);
    }
}
