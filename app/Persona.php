<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $guarded = [];

    public function attributes(){
        return $this->hasMany(Attribute::class);
    }

    public function addAttribute($attribute){
        
        $this->attributes()->create($attribute);
        
        // return Attribute::create([
        //     'persona_id' => $this->id,
        //     'description' => $description]);
    }
}
