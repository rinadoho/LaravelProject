<?php

namespace App\Http\Controllers;

use \App\Persona;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->only(['create', 'store']);
    }

    public function index() {
        $personas = Persona::where('owner_id', auth()->id())->get();
        return view('personas.index', compact('personas'));
    }

    public function create() { return view('personas.create'); }


    public function store() {
        //$persona = New Persona(); $persona->persona_name = request('persona_name'); $persona->description = request('description');$persona -> save();

        $att = request()->validate([
            'persona_name'=> ['required', 'min:5'],
            'description'=> 'required',
            'age'=> 'required',
            'role'=> 'required',
            'gender'=> 'required'
        ]);
        

        Persona::create($att + ['owner_id' => auth()->id()]);

        return redirect('/personas');
    }

    public function show(Persona $persona){

        if($persona->owner_id !== auth()->id()){
            abort(403);
        }

        return view('personas.show', compact('persona'));
    }

    public function edit(Persona $persona){

        return view('personas.edit', compact('persona'));
    }
    public function update(Persona $persona){
  
         $persona->persona_name = request('persona_name'); 
         $persona->description = request('description');
         $persona->age = request('age');
         $persona->role = request('role'); 

         $persona -> save();

        return redirect('/personas');

    }
    public function destroy(Persona $persona){
        $persona->delete();
        return redirect('/personas'); 
    }

}

