<?php

namespace App\Http\Controllers;

use App\Models\Persona;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Persona::all();
        $personas = Persona::paginate(2);
        return view('personas',compact('personas'));
    }

    public function show($id)
    {
        //return Persona::find($nPerCodigo);
        //return view('personas.show', compact('persona'));
        return view('show',[
            'persona'=> Persona::find($id)
        ]);
    }


}
