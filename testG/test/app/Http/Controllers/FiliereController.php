<?php

namespace App\Http\Controllers;

use App\Models\Filieres;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    public function list()
    {
        $filieres=Filieres::all();
        return view('Filieres.list_filieres')->with(compact('filieres'));
    }

    public function add()
    {
        
        $filieres=Filieres::all();
       

        return view('Filieres.add_filieres')->with(compact( 'filieres'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'code' => 'required|string|min:2',
            'libelle' => 'required|string|min:8',
          
        ]);
        $filiere=new Filieres();
        $filiere->code=$request->code;
        $filiere->libelle=$request->libelle;
        $filiere->save();
       
    }
    
    public function edit($id)
    {
        $filiere=Filieres::findOrFail($id);
        return view('filieres.edit_filieres')->with(compact('filiere'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'code' => 'required|string|min:3',
            'libelle' => 'required|string|min:6',
            
          
        ]);
        $filiere=Filieres::findOrFail($id);
       // dd($request->idTypStag);
        $filiere->code=$request->codEcole;
        $filiere->libelle=$request->nomEcole;
        $filiere->save();
        return redirect()->route('list_filiere')->with('success', 'filiere modifier succes');  
    }
}



