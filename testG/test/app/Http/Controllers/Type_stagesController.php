<?php

namespace App\Http\Controllers;

use App\Models\Type_stages;
use Illuminate\Http\Request;

class Type_stagesController extends Controller
{
    public function list()
    {
        $type_stage=Type_stages::all();
        return view('Type_stages.list_types')->with(compact('type_stage'));
    }
}
