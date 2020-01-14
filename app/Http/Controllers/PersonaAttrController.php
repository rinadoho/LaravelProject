<?php

namespace App\Http\Controllers;

use App\Attribute;
use App\Persona;
use Illuminate\Http\Request;

class PersonaAttrController extends Controller
{
    // public function edit(Attribute $attribute){

    //     return view('personas.edit', compact('persona'));
    // }

    // public function update(Attribute $attribute){

    //     // $attribute->update(['completed' => request()->has('completed')]);
    //     //$attribute->complete(request()->has('completed'));

    //     $method = request()->has('completed') ? 'complete' : 'incomplete';

    //     $attribute->$method();

    //     return back();
    // }

    public function destroy(Attribute $attribute){
        $attribute->delete();
        return back(); 
    }

    public function create() { return view('personas.create'); }

    public function store(Persona $persona) {

        $info = request()->validate(['description'=> 'required']);

        $persona->addAttribute($info);

        return back();
    }
}
