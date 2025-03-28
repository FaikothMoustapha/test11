<?php

namespace App\Http\Controllers;

use App\Models\Ecoles;
use Illuminate\Http\Request;

class EcolesController extends Controller
{
    public function list()
    {
        $ecoles=Ecoles::all();
        return view('ecoles.list_ecole')->with(compact('ecoles'));
    }
    public function add()
    {
        $ecoles=Ecoles::all();
        return view('ecoles.add_ecole')->with(compact('ecoles'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'codEcole' => 'required|string|min:2',
            'nomEcole' => 'required|string|min:8',
          
        ]);
        $ecole=new Ecoles();
        $ecole->nomEcole=$request->nomEcole;
        $ecole->codEcole=$request->codEcole;
        $ecole->save();
    }

    
    public function edit($id)
    {
        $ecoles=Ecoles::findOrFail($id);
        return view('ecoles.edit_ecole')->with(compact('ecoles'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'codEcole' => 'required|string|min:3',
            'nomEcole' => 'required|string|min:6',
            
          
        ]);
        $ecoles=Ecoles::findOrFail($id);
       // dd($request->idTypStag);
        $ecoles->codEcole=$request->codEcole;
        $ecoles->nomEcole=$request->nomEcole;
        $ecoles->save();
        return redirect()->route('list_ecole')->with('success', 'Ecole modifier succes');  
    }
}
