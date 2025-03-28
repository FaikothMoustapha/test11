<?php

namespace App\Http\Controllers;
use App\Models\Ecoles;
use App\Models\Filieres;
use App\Models\Stagiaires;
use App\Models\Type_stages;

use Illuminate\Http\Request;

class StagiairesController extends Controller
{
    public function list()
    {
        $stagiaires=Stagiaires::all();
        return view('Stagiaires.list_stagiaires')->with(compact('stagiaires'));
    }


    public function add()
    {
        // pour prendre tout les ecole,filiere,et type
        $ecoles=Ecoles::all();
        $filieres=Filieres::all();
        $type_stages=Type_stages::all();
        return view('Stagiaires.add_stagiaires')->with(compact('ecoles', 'filieres', 'type_stages'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nomStag' => 'required|string|min:3',
            'prenStag' => 'required|string|min:3',
           'email' =>'required|email|unique:Stagiaires',
           'tel' => 'required|string|min:10',
           'adrStag' => 'required|string|min:7',
           'theme' => 'required|string|min:30',
        ]);
       
        $stagiaire=new Stagiaires;
        $stagiaire->nomStag=$request->nomStag;
        $stagiaire->prenStag=$request->prenStag;
        $stagiaire->datNais=$request->datNais;
        $stagiaire->genre=$request->genre;
        $stagiaire->email=$request->email;
        $stagiaire->tel=$request->tel;
        $stagiaire->datDebut=$request->datDebut;
        $stagiaire->datFin=$request->datFin;
        $stagiaire->ecole_id=$request->idEcole;
        $stagiaire->filiere_id=$request->idFil;
        $stagiaire->type_stage_id=$request->idTypStag;
        $stagiaire->adrStag=$request->adrStag;
        $stagiaire->theme=$request->theme;
        $stagiaire->save();
       
            return redirect()->back()->with('success', 'Stagiaires ajouter succes');      
    }
    public function edit($id)
    {
        // c'est pour recuper les
        // dd($id);
        $ecoles=Ecoles::all();
        $filieres=Filieres::all();
        $type_stages=Type_stages::all();
        $stagiaires=Stagiaires::findOrFail($id);
        
        // dd($stagiaires);
        return view('Stagiaires.edit_stagiaires')->with(compact('stagiaires','ecoles', 'filieres', 'type_stages'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'nomStag' => 'required|string|min:3',
            'prenStag' => 'required|string|min:3',
            
           'tel' => 'required|string|min:10',
           'adrStag' => 'required|string|min:7',
           'theme' => 'required|string|min:30',
        ]);
        $stagiaires=Stagiaires::findOrFail($id);
       // dd($request->idTypStag);
        $stagiaires->nomStag=$request->nomStag;
        $stagiaires->prenStag=$request->prenStag;
        $stagiaires->datNais=$request->datNais;
        $stagiaires->genre=$request->genre;
        $stagiaires->email=$request->email;
        $stagiaires->tel=$request->tel;
        $stagiaires->datDebut=$request->datDebut;
        $stagiaires->datFin=$request->datFin;
        $stagiaires->ecole_id=$request->idEcole;
        $stagiaires->filiere_id=$request->idFil;
        $stagiaires->type_stage_id=$request->idTypStag;
        $stagiaires->adrStag=$request->adrStag;
        $stagiaires->theme=$request->theme;
        $stagiaires->save();
        return redirect()->route('list_stagiaire')->with('success', 'Stagiaires modifier succes');  
    }

    public function show($id)
   {
     // dd($id);
     $ecoles=Ecoles::all();
     $filieres=Filieres::all();
     $type_stages=Type_stages::all();
     $stagiaires=Stagiaires::findOrFail($id);
     
     // dd($stagiaires);
     return view('Stagiaires.show_stagiaires')->with(compact('stagiaires','ecoles', 'filieres', 'type_stages'));
 
   }
        public function delete($id)
   {
       // Trouver le stagiaire par son ID
       $ecoles=Ecoles::all();
       $filieres=Filieres::all();
       $type_stages=Type_stages::all();
       $stagiaires = Stagiaires::findOrFail($id);
       
       if ($stagiaires) {
           // Supprimer le stagiaire
           $stagiaires->delete();
           return redirect()->route('list_stagiaire')->with('success', 'Stagiaires supprimer avec succes'); 
       }
   }
}
    